<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\JenisBarang;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class JenisBarangController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $jenisbarang = DB::table('tb_inventaris_jenis_barang')->orderBy('id', 'desc')->paginate(5);
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.jenisbarang.index', compact(['jenisbarang', 'pengguna']));
  }

  /**
   * Show the form for creating new User.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.jenisbarang.create', compact(['pengguna']));
  }

  /**
   * Store a newly created User in storage.
   *
   * @param  \App\Http\Requests\StoreUsersRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $this->validate($request, [
          'nama_jenis_barang' => 'required',
      ]);

      jenisbarang::create([
          'nama_jenis_barang' => $request->nama_jenis_barang,
      ]);

      Alert::success('Berhasil Di Tambahkan', $request->judul_jenisbarang);

      return redirect()->route('admin.jenisbarang.index');
  }


  /**
   * Show the form for editing User.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(JenisBarang $jenisbarang)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.jenisbarang.edit', compact('jenisbarang', 'pengguna'));
  }

  /**
   * Update User in storage.
   *
   * @param  \App\Http\Requests\UpdateUsersRequest  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $this->validate($request, [
          'nama_jenis_barang' => 'required',
      ]);

      $jenisbarang = JenisBarang::find($request->id);
      $jenisbarang->nama_jenis_barang = $request->nama_jenis_barang;
      $jenisbarang->save();

      toast('Ubah data berhasil','success');

      return redirect()->route('admin.jenisbarang.index');
  }

  public function show(JenisBarang $jenisbarang)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.jenisbarang.show', compact('jenisbarang', 'pengguna'));
  }

  /**
   * Remove User from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $data = JenisBarang::findOrFail($id);

      $data->delete();

      Alert::success('Berhasil', 'Di Hapus');

      return redirect()->route('admin.jenisbarang.index');
  }
}
