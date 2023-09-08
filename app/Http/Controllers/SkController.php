<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\Sk;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }

        $sk = Sk::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sk.index', compact(['sk', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sk.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'no_sk' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'bertanda_tangan' => 'required',
            'opd' => 'required',
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
                $file->move('upload/sk', $name);
                $data[] = $name;
            }
         }

         $file= new File();
         $file=json_encode($data);


        Sk::create([
            'no_sk' => $request->no_sk,
            'no_agenda' => $request->no_agenda,
            'tanggal_surat' => $request->tanggal_surat,
            'bertanda_tangan' => $request->bertanda_tangan,
            'opd' => $request->opd,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('admin.sk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(Sk $sk)
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sk.show', compact('sk', 'pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Sk $sk)
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sk.edit', compact('sk', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sk $sk)
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_sk' => 'required',
            'no_agenda' => 'required',
            'tanggal_surat' => 'required',
            'bertanda_tangan' => 'required',
            'opd' => 'required',
            'hal_surat' => 'required',

            'created_by' => 'required',
        ]);

        $gambar = Sk::where('no_sk',$request->no_sk)->first();
        $gambar = $gambar->lampiran;
        $idd = $gambar->id;

        if ($request->file('lampiran')!=null) {
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/sk/'.$gambar);
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

        $Masuk = Sk::find($idd);
        $Masuk->no_sk = $request->no_sk;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->tanggal_surat = $request->tanggal_surat;
        $Masuk->bertanda_tangan = $request->bertanda_tangan;
        $Masuk->opd = $request->opd;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $file;
        $Masuk->created_by = $request->created_by;
        $Masuk->save();

        return redirect()->route('admin.sk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }

        $data = Sk::findOrFail($id);

        $gambar = Sk::where('id',$id)->first();
        $gambar = json_decode($gambar->lampiran);

        foreach ($gambar as $key => $gambar) {
        	File::delete('upload/sk/'.$gambar);
        }

        $data->delete();

        return redirect()->route('admin.sk.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('sk_manage')) {
            return abort(401);
        }
        Sk::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
