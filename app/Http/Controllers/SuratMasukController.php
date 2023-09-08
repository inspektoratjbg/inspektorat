<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\SuratMasuk;
use App\Disposisi;
use File;
use App\Imports\SuratMasukImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSuratMasukRequest;
use App\Http\Requests\Admin\UpdateSuratMasukRequest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;


class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }

        $surat_masuk = SuratMasuk::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_masuk.index', compact(['surat_masuk', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');
        $disposisi = Disposisi::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_masuk.create', compact(['roles', 'pengguna', 'disposisi']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }


        $this->validate($request, [
            'no_surat_masuk' => 'required',
            'pengirim' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_surat' => 'required',
            'hal_surat' => 'required',
            'lampiran.*' => 'file|image|mimes:jpeg,png,jpg|max:5120',
            'no_agenda' => 'required',
        ]);

        if($request->disposisi!=null){
          $disposisi=json_encode($request->disposisi);
        }else{
          $disposisi='';
        }

        if($request->isi_disposisi!=null){
          $isi_disposisi=$request->isi_disposisi;
        }else{
          $isi_disposisi='';
        }

        if($request->created_by!=null){
          $created_by=$request->created_by;
        }else{
          $created_by='';
        }

        if($request->pengolah!=null){
          $pengolah=$request->pengolah;
        }else{
          $pengolah='';
        }

        $file='';
        if ($request->file('lampiran')!=null) {
          if($request->hasfile('lampiran'))
             {

                foreach($request->file('lampiran') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move('upload/masuk', $name);
                    $data[] = $name;
                }
             }

           $file= new File();
           $file=json_encode($data);
        }

        SuratMasuk::create([
            'no_surat_masuk' => $request->no_surat_masuk,
            'pengirim' => $request->pengirim,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_surat' => $request->tanggal_surat,
            'hal_surat' => $request->hal_surat,
            'lampiran' => $file,
            'no_agenda' => $request->no_agenda,
            'pengolah' => $pengolah,
            'disposisi' => $disposisi,
            'isi_disposisi' => $isi_disposisi,
            'created_by' => $created_by,
        ]);

        Alert::success('Data Berhasil Di Tambahkan');

        return redirect()->route('admin.surat_masuk.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratMasuk $surat_masuk)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }


        $roles = Role::get()->pluck('name', 'name');
        $disposisi = Disposisi::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_masuk.edit', compact('surat_masuk', 'roles', 'pengguna', 'disposisi'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratMasuk $suratmasuk)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'no_surat_masuk' => 'required',
            'pengirim' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_surat' => 'required',
            'hal_surat' => 'required',
            'lampiran' => 'file|image|mimes:jpeg,png,jpg|max:5120',
            'no_agenda' => 'required',
        ]);
        // $wkwk = SuratMasuk::where('no_surat_masuk',$request->no_surat_masuk)->first();
        // echo print_r($wkwk->lampiran);

        $gambar = SuratMasuk::where('no_surat_masuk',$request->no_surat_masuk)->first();
        $idd = $gambar->id;
        $gambar = $gambar->lampiran;
        $file=$gambar;

        if($request->disposisi!=null){
          $disposisi=$request->disposisi;
        }else{
          $disposisi='';
        }

        if($request->isi_disposisi!=null){
          $isi_disposisi=$request->isi_disposisi;
        }else{
          $isi_disposisi='';
        }

        if($request->created_by!=null){
          $created_by=$request->created_by;
        }else{
          $created_by='';
        }

        if($request->pengolah!=null){
          $pengolah=$request->pengolah;
        }else{
          $pengolah='';
        }

        if ($request->file('lampiran')!=null) {
            foreach ($gambar as $key => $gambar) {
                File::delete('upload/masuk/'.$gambar);
            }

            if($request->hasfile('lampiran'))
             {

                foreach($request->file('lampiran') as $file)
                {
                    $name=$request->tanggal_surat.$file->getClientOriginalName();
                    $file->move('upload/masuk', $name);
                    $data[] = $name;
                }
             }

             $file= new File();
             $file=json_encode($data);
        }

        $Masuk = SuratMasuk::find($idd);
        $Masuk->no_surat_masuk = $request->no_surat_masuk;
        $Masuk->pengirim = $request->pengirim;
        $Masuk->tanggal_masuk = $request->tanggal_masuk;
        $Masuk->tanggal_surat = $request->tanggal_surat;
        $Masuk->hal_surat = $request->hal_surat;
        $Masuk->lampiran = $file;
        $Masuk->no_agenda = $request->no_agenda;
        $Masuk->pengolah = $pengolah;
        $Masuk->disposisi = $disposisi;
        $Masuk->isi_disposisi = $isi_disposisi;
        $Masuk->created_by = $created_by;
        $Masuk->save();

        Alert::success('Data Berhasil Di Ubah');

        return redirect()->route('admin.surat_masuk.index');
    }

    public function show(SuratMasuk $surat_masuk)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }

        $surat_masuk->load('roles');
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.surat_masuk.show', compact('surat_masuk', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }

        $data = SuratMasuk::findOrFail($id);

        $gambar = SuratMasuk::where('id',$id)->first();

        if ($gambar->lampiran!=null) {
          $gambar = json_decode($gambar->lampiran);
          foreach ($gambar as $key => $gambar) {
              File::delete('upload/masuk/'.$gambar);
          }
        }

        $data->delete();
        Alert::success('Data Berhasil Di Hapus');
        return redirect()->route('admin.surat_masuk.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }
        SuratMasuk::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function print($id)
    {
        //GET DATA BERDASARKAN ID
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }
        $surat_masuk = SuratMasuk::where('id', $id)->first();
        // echo print_r($surat_masuk);
        // die();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        $pdf = PDF::loadView('admin.surat_masuk.print', compact([ 'surat_masuk', 'pengguna']))->setPaper('folio', 'potrait');
        return $pdf->stream();
    }

    public function import_excel(Request $request)
    {
        if (! Gate::allows('surat_masuk_manage')) {
            return abort(401);
        }
        // validasi

        $this->validate($request, [
            'file' => 'required'
        ]);

        Excel::import(new SuratMasukImport,request()->file('file'));

        Alert::success('Berhasil Di Import');

        // alihkan halaman kembali
        return redirect()->route('admin.surat_masuk.index');
    }
}
