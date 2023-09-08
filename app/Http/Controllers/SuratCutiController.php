<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\SuratCuti;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SuratCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }

        $suratcuti = SuratCuti::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratcuti.index', compact(['suratcuti', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratcuti.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'no_surat_cuti' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'pemberi_cuti' => 'required',
            'penerima_cuti' => 'required',
            'hal_surat' => 'required',
            'lampiran' => 'required',
            'lampiran.*' => 'file|image|mimes:jpeg,png,jpg|max:5120',
            'created_by' => 'required',
        ]);

        if($request->hasfile('lampiran'))
         {

            foreach($request->file('lampiran') as $file)
            {
                $name=$request->tanggal_surat.$file->getClientOriginalName();
                $file->move('upload/cuti', $name);
                $data[] = $name;
            }
         }

         $file= new File();
         $file=json_encode($data);
         // echo print_r($file);
         // die();

        SuratCuti::create([
            'no_surat_cuti' => $request->no_surat_cuti,
            'no_agenda' => $request->no_agenda,
            'tanggal_surat' => $request->tanggal_surat,
            'pemberi_cuti' => $request->pemberi_cuti,
            'penerima_cuti' => $request->penerima_cuti,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'created_by' => $request->created_by,
        ]);
        // echo print_r($file);
        //  die();

        return redirect()->route('admin.suratcuti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratCuti $suratcuti)
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratcuti.show', compact('suratcuti', 'pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratCuti $suratcuti)
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratcuti.edit', compact('suratcuti', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratCuti $suratcuti)
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_surat_cuti' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'pemberi_cuti' => 'required',
            'penerima_cuti' => 'required',
            'hal_surat' => 'required',

            'created_by' => 'required',
        ]);

        $gambar = SuratCuti::where('no_surat_cuti',$request->no_surat_cuti)->first();
        $gambar = $gambar->lampiran;
        $idd = $gambar->id;

        if ($request->file('lampiran')!=null) {
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/cuti/'.$gambar);
            }

            if($request->hasfile('lampiran'))
	         {

	            foreach($request->file('lampiran') as $file)
	            {
	                $name=$request->tanggal_surat.$file->getClientOriginalName();
	                $file->move('upload/cuti', $name);
	                $data[] = $name;
	            }
	         }

	         $file= new File();
	         $file=json_encode($data);
        }

        $Masuk = SuratCuti::find($idd);
        $Masuk->no_surat_cuti = $request->no_surat_cuti;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->tanggal_surat = $request->tanggal_surat;
        $Masuk->pemberi_cuti = $request->pemberi_cuti;
        $Masuk->penerima_cuti = $request->penerima_cuti;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $file;
        $Masuk->created_by = $request->created_by;
        $Masuk->save();

        return redirect()->route('admin.suratcuti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }

        $data = SuratCuti::findOrFail($id);

        $gambar = SuratCuti::where('id',$id)->first();
        $gambar = json_decode($gambar->lampiran);

        foreach ($gambar as $key => $gambar) {
        	File::delete('upload/cuti/'.$gambar);
        }


        $data->delete();

        return redirect()->route('admin.suratcuti.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('cuti_manage')) {
            return abort(401);
        }
        SuratCuti::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
