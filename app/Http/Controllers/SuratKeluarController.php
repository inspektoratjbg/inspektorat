<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\SuratKeluar;
use App\Disposisi;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }

        $surat_keluar = SuratKeluar::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_keluar.index', compact(['surat_keluar', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }
        $disposisi = Disposisi::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_keluar.create', compact(['pengguna', 'disposisi']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }
        // echo print_r($request->file('lampiran'));
        // die();
        $kak = json_encode($request->disposisi);
        $this->validate($request, [
            'no_surat_keluar' => 'required',
            'tanggal_keluar' => 'required',
            'hal_surat' => 'required',
            'lampiran' => 'required',
            'lampiran.*' => 'file|image|mimes:jpeg,png,jpg|max:5120',
            'tertuju' => 'required',
            'alamat' => 'required',
            'no_agenda' => 'required',
            'created_by' => 'required',
        ]);

        if($request->hasfile('lampiran'))
         {

            foreach($request->file('lampiran') as $file)
            {
                $name=$request->tanggal_keluar.$file->getClientOriginalName();
                $file->move('upload/keluar', $name);
                $data[] = $name;
            }
         }

         $file= new File();
         $file=json_encode($data);


        SuratKeluar::create([
            'no_surat_keluar' => $request->no_surat_keluar,
            'tanggal_keluar' => $request->tanggal_keluar,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'tertuju' => $request->tertuju,
            'tembusan' => $request->tembusan,
            'alamat' => $request->alamat,
            'no_agenda' => $request->no_agenda,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('admin.surat_keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeluar $surat_keluar)
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_keluar.show', compact('surat_keluar', 'pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeluar $surat_keluar)
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }

        $disposisi = Disposisi::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_keluar.edit', compact('surat_keluar', 'pengguna', 'disposisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeluar $suratkeluar)
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_surat_keluar' => 'required',
            'tanggal_keluar' => 'required',
            'hal_surat' => 'required',
            'lampiran' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            'tertuju' => 'required',
            'alamat' => 'required',
            'no_agenda' => 'required',
            'created_by' => 'required',
        ]);

        $gambar = SuratKeluar::where('no_surat_keluar',$request->no_surat_keluar)->first();
        $lampir = $gambar->lampiran;
        $idd = $gambar->id;

        if ($request->file('lampiran')!=null) {
            $gambar = json_decode($gambar->lampiran);
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/keluar/'.$gambar);
            }
            if($request->hasfile('lampiran'))
             {

                foreach($request->file('lampiran') as $file)
                {
                    $name=$request->tanggal_surat.$file->getClientOriginalName();
                    $file->move('upload/sk', $name);
                    $data[] = $name;
                }
             }

             $file= new File();
             $file=json_encode($data);
        }

        $Masuk = SuratKeluar::find($idd);
        $Masuk->no_surat_keluar = $request->no_surat_keluar;
        $Masuk->tanggal_keluar = $request->tanggal_keluar;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $lampir;
        $Masuk->tertuju = $request->tertuju;
        $Masuk->tembusan = $request->tembusan;
        $Masuk->alamat = $request->alamat;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->created_by = $request->created_by;
        $Masuk->save();

        return redirect()->route('admin.surat_keluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }

        $data = SuratKeluar::findOrFail($id);

        $gambar = SuratKeluar::where('id',$id)->first();
        $gambar = json_decode($gambar->lampiran);

        foreach ($gambar as $key => $gambar) {
            File::delete('upload/keluar/'.$gambar);
        }

        $data->delete();

        return redirect()->route('admin.surat_keluar.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('surat_keluar_manage')) {
            return abort(401);
        }
        SuratKeluar::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
