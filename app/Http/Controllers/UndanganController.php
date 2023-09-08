<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\Undangan;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }

        $undangan = Undangan::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.undangan.index', compact(['undangan', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.undangan.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'no_surat_undangan' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'pemberi' => 'required',
            'tertuju' => 'required',
            'hal_surat' => 'required',
            'lampiran' => 'required',
            'lampiran.*' => 'file|image|mimes:jpeg,png,jpg|max:5120',
            'jenis_undangan' => 'required',
            'created_by' => 'required',
        ]);

        if($request->hasfile('lampiran'))
         {

            foreach($request->file('lampiran') as $file)
            {
                $name=$request->tanggal_surat.$file->getClientOriginalName();
                $file->move('upload/undangan', $name);
                $data[] = $name;
            }
         }

         $file= new File();
         $file=json_encode($data);
         // echo print_r($file);
         // die();

        undangan::create([
            'no_surat_undangan' => $request->no_surat_undangan,
            'no_agenda' => $request->no_agenda,
            'tanggal_surat' => $request->tanggal_surat,
            'pemberi' => $request->pemberi,
            'tertuju' => $request->tertuju,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'jenis_undangan' => $request->jenis_undangan,
            'created_by' => $request->created_by,
        ]);
        // echo print_r($file);
        //  die();

        return redirect()->route('admin.undangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(Undangan $undangan)
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.undangan.show', compact('undangan', 'pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Undangan $undangan)
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.undangan.edit', compact('undangan', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Undangan $undangan)
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_surat_undangan' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'pemberi' => 'required',
            'tertuju' => 'required',
            'hal_surat' => 'required',
            'jenis_undangan' => 'required',
            'created_by' => 'required',
        ]);

        $gambar = Undangan::where('no_surat_undangan',$request->no_surat_undangan)->first();
        $gambar = $gambar->lampiran;
        $idd = $gambar->id;

        if ($request->file('lampiran')!=null) {
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/undangan/'.$gambar);
            }
            if($request->hasfile('lampiran'))
	         {

	            foreach($request->file('lampiran') as $file)
	            {
	                $name=$request->tanggal_surat.$file->getClientOriginalName();
	                $file->move('upload/undangan', $name);
	                $data[] = $name;
	            }
	         }

	         $file= new File();
	         $file=json_encode($data);
        }

        $Masuk = Undangan::find($idd);
        $Masuk->no_surat_undangan = $request->no_surat_undangan;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->tanggal_surat = $request->tanggal_surat;
        $Masuk->pemberi = $request->pemberi;
        $Masuk->tertuju = $request->tertuju;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $file;
        $Masuk->jenis_undangan = $request->jenis_undangan;
        $Masuk->created_by = $request->created_by;
        $Masuk->save();

        return redirect()->route('admin.undangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }

        $data = Undangan::findOrFail($id);

        $gambar = Undangan::where('id',$id)->first();
        $gambar = json_decode($gambar->lampiran);

        foreach ($gambar as $key => $gambar) {
        	File::delete('upload/undangan/'.$gambar);
        }


        $data->delete();

        return redirect()->route('admin.undangan.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('undangan_manage')) {
            return abort(401);
        }
        Undangan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
