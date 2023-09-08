<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\SuratKepegawaiaan;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SuratKepegawaiaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }

        $suratkepegawaiaan = SuratKepegawaiaan::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratkepegawaiaan.index', compact(['suratkepegawaiaan', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratkepegawaiaan.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'no_surat_kepegawaiaan' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'bertanda_tangan' => 'required',
            'tertuju' => 'required',
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
                $file->move('upload/kepegawaiaan', $name);
                $data[] = $name;
            }
         }

         $file= new File();
         $file=json_encode($data);


        SuratKepegawaiaan::create([
            'no_surat_kepegawaiaan' => $request->no_surat_kepegawaiaan,
            'no_agenda' => $request->no_agenda,
            'tanggal_surat' => $request->tanggal_surat,
            'bertanda_tangan' => $request->bertanda_tangan,
            'tertuju' => $request->tertuju,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('admin.suratkepegawaiaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKepegawaiaan $suratkepegawaiaan)
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratkepegawaiaan.show', compact('suratkepegawaiaan', 'pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKepegawaiaan $suratkepegawaiaan)
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.suratkepegawaiaan.edit', compact('suratkepegawaiaan', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKepegawaiaan $suratkepegawaiaan)
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_surat_kepegawaiaan' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'bertanda_tangan' => 'required',
            'tertuju' => 'required',
            'hal_surat' => 'required',

            'created_by' => 'required',
        ]);

        $gambar = SuratKepegawaiaan::where('no_surat_kepegawaiaan',$request->no_surat_kepegawaiaan)->first();
        $gambar = $gambar->lampiran;
        $idd = $gambar->id;

        if ($request->file('lampiran')!=null) {
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/kepegawaiaan/'.$gambar);
            }

            if($request->hasfile('lampiran'))
	         {

	            foreach($request->file('lampiran') as $file)
	            {
	                $name=$request->tanggal_surat.$file->getClientOriginalName();
	                $file->move('upload/kepegawaiaan', $name);
	                $data[] = $name;
	            }
	         }

	         $file= new File();
	         $file=json_encode($data);
        }

        $Masuk = SuratKepegawaiaan::find($idd);
        $Masuk->no_surat_kepegawaiaan = $request->no_surat_kepegawaiaan;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->tanggal_surat = $request->tanggal_surat;
        $Masuk->bertanda_tangan = $request->bertanda_tangan;
        $Masuk->tertuju = $request->tertuju;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $file;
        $Masuk->created_by = $request->created_by;
        $Masuk->save();

        return redirect()->route('admin.suratkepegawaiaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }

        $data = SuratKepegawaiaan::findOrFail($id);

        $gambar = SuratKepegawaiaan::where('id',$id)->first();
        $gambar = json_decode($gambar->lampiran);

        foreach ($gambar as $key => $gambar) {
        	File::delete('upload/kepegawaiaan/'.$gambar);
        }

        $data->delete();

        return redirect()->route('admin.suratkepegawaiaan.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('suratkepegawaiaan_manage')) {
            return abort(401);
        }
        SuratKepegawaiaan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
