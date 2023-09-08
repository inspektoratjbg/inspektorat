<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\SuratTugas;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SuratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }

        $surattugas = SuratTugas::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        return view('admin.surattugas.index', compact(['surattugas', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surattugas.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'no_surat_tugas' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'pemberi_tugas' => 'required',
            'penerima_tugas' => 'required',
            'hal_surat' => 'required',
            'lampiran' => 'required',
            'lampiran.*' => 'file|image|mimes:jpeg,png,jpg|max:5120',
            'jenis_surat' => 'required',
            'created_by' => 'required',
        ]);

        if($request->hasfile('lampiran'))
         {

            foreach($request->file('lampiran') as $file)
            {
                $name=$request->tanggal_surat.$file->getClientOriginalName();
                $file->move('upload/tugas', $name);
                $data[] = $name;
            }
         }

         $file= new File();
         $file=json_encode($data);


        SuratTugas::create([
            'no_surat_tugas' => $request->no_surat_tugas,
            'no_agenda' => $request->no_agenda,
            'tanggal_surat' => $request->tanggal_surat,
            'pemberi_tugas' => $request->pemberi_tugas,
            'penerima_tugas' => $request->penerima_tugas,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'jenis_surat' => $request->jenis_surat,
            'created_by' => $request->created_by,
        ]);


        return redirect()->route('admin.surattugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }
        $surattugas = SuratTugas::where('id',$id)->first();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surattugas.show', compact('surattugas', 'pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }
        $surattugas = SuratTugas::where('id',$id)->first();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surattugas.edit', compact('surattugas', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratTugas $surattugas)
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_surat_tugas' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'pemberi_tugas' => 'required',
            'penerima_tugas' => 'required',
            'hal_surat' => 'required',
            'jenis_surat' => 'required',
            'created_by' => 'required',
        ]);

        $gambar = SuratTugas::where('no_surat_tugas',$request->no_surat_tugas)->first();
        $gambar = $gambar->lampiran;
        $idd = $gambar->id;

        if ($request->file('lampiran')!=null) {
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/tugas/'.$gambar);
            }
            if($request->hasfile('lampiran'))
	         {

	            foreach($request->file('lampiran') as $file)
	            {
	                $name=$request->tanggal_surat.$file->getClientOriginalName();
	                $file->move('upload/tugas', $name);
	                $data[] = $name;
	            }
	         }

	         $file= new File();
	         $file=json_encode($data);
        }

        $Masuk = SuratTugas::find($idd);
        $Masuk->no_surat_tugas = $request->no_surat_tugas;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->tanggal_surat = $request->tanggal_surat;
        $Masuk->pemberi_tugas = $request->pemberi_tugas;
        $Masuk->penerima_tugas = $request->penerima_tugas;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $file;
        $Masuk->jenis_surat = $request->jenis_surat;
        $Masuk->created_by = $request->created_by;
        $Masuk->save();

        return redirect()->route('admin.surattugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }

        $data = SuratTugas::findOrFail($id);

        $gambar = SuratTugas::where('id',$id)->first();
        $gambar = json_decode($gambar->lampiran);

        foreach ($gambar as $key => $gambar) {
        	File::delete('upload/tugas/'.$gambar);
        }


        $data->delete();

        return redirect()->route('admin.surattugas.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('tugas_manage')) {
            return abort(401);
        }
        surattugas::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
