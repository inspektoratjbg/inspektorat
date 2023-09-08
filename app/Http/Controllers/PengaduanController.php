<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\arsip;
use App\pegawai;
use App\gambar;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PengaduanController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      $pengaduan = Pengaduan::all();

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      // echo print_r($pegawai);
      // die();

      return view('admin.pengaduan.index', compact(['pengaduan', 'pengguna']));
  }

  /**
   * Show the form for creating new User.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.pengaduan.create', compact(['pengguna']));
  }

  public function store(Request $request)
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      Alert::success('Berhasil Di Tambahkan', $request->judul_pegawai);

      return redirect()->route('admin.pengaduan.index');
  }


  /**
   * Show the form for editing User.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(pegawai $pegawai)
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.pengaduan.edit', compact('pengguna'));
  }

  /**
   * Update User in storage.
   *
   * @param  \App\Http\Requests\UpdateUsersRequest  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, pegawai $pegawai)
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      toast('Ubah data berhasil','success');

      return redirect()->route('admin.pengaduan.index');
  }

  public function show(Pengaduan $pengaduan)
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.pengaduan.show', compact('pengaduan', 'pengguna'));
  }

  /**
   * Remove User from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      if (! Gate::allows('pengaduan_manage')) {
          return abort(401);
      }

      $data = Pengaduan::findOrFail($id);
      $data->delete();

      Alert::success('Berhasil', 'Di Hapus');

      return redirect()->route('admin.pengaduan.index');
  }
}
