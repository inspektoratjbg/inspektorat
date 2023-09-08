<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Satuan;
use App\JenisBarang;
use App\pegawai;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BarangImport;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
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

      $barang = DB::table('tb_inventaris_barang')
              ->join('tb_inventaris_satuan', 'tb_inventaris_satuan.id', '=', 'tb_inventaris_barang.id_satuan')
              ->join('tb_inventaris_jenis_barang', 'tb_inventaris_jenis_barang.id', '=', 'tb_inventaris_barang.id_jenis_barang')
              ->select('tb_inventaris_barang.*' ,'tb_inventaris_satuan.nama_satuan', 'tb_inventaris_jenis_barang.nama_jenis_barang')
              ->get();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.barang.index', compact(['barang', 'pengguna']));
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
      $jenisbarang = JenisBarang::all();
      $satuan = Satuan::all();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.barang.create', compact(['pengguna', 'jenisbarang', 'satuan']));
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
          'nama_barang' => 'required',
          'id_satuan' => 'required',
          'harga_barang' => 'required',
          'id_jenis_barang' => 'required',
      ]);

      barang::create([
          'nama_barang' => $request->nama_barang,
          'id_satuan' => $request->id_satuan,
          'harga_barang' => $request->harga_barang,
          'id_jenis_barang' => $request->id_jenis_barang,
      ]);

      Alert::success('Berhasil Di Tambahkan', $request->judul_barang);

      return redirect()->route('admin.barang.index');
  }


  /**
   * Show the form for editing User.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Barang $barang)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $jenisbarang = JenisBarang::all();
      $satuan = Satuan::all();
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.barang.edit', compact('barang', 'pengguna', 'jenisbarang', 'satuan'));
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
          'nama_barang' => 'required',
          'id_satuan' => 'required',
          'harga_barang' => 'required',
          'id_jenis_barang' => 'required',
      ]);

      $barang = Barang::find($request->id);
      $barang->nama_barang = $request->nama_barang;
      $barang->id_satuan = $request->id_satuan;
      $barang->harga_barang = $request->harga_barang;
      $barang->id_jenis_barang = $request->id_jenis_barang;
      $barang->save();

      toast('Ubah data berhasil','success');

      return redirect()->route('admin.barang.index');
  }

  public function show(Barang $barang)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.barang.show', compact('barang', 'pengguna'));
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

      $data = Barang::findOrFail($id);

      $data->delete();

      Alert::success('Berhasil', 'Di Hapus');

      return redirect()->route('admin.barang.index');
  }

  public function import_excel(Request $request)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      // validasi

      $this->validate($request, [
          'file' => 'required'
      ]);

      Excel::import(new BarangImport,request()->file('file'));

      Alert::success('Berhasil Di Import');

      // alihkan halaman kembali
      return redirect()->route('admin.barang.index');
  }
}
