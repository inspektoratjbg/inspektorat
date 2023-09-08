<?php

namespace App\Http\Controllers;

use App\Satuan;
use App\pegawai;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
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
      $satuan = DB::table('tb_inventaris_satuan')->orderBy('id', 'desc')->paginate(5);
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.satuan.index', compact(['satuan', 'pengguna']));
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

      return view('admin.satuan.create', compact(['pengguna']));
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
          'nama_satuan' => 'required',
      ]);

      satuan::create([
          'nama_satuan' => $request->nama_satuan,
      ]);

      Alert::success('Berhasil Di Tambahkan', $request->judul_satuan);

      return redirect()->route('admin.satuan.index');
  }


  /**
   * Show the form for editing User.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Satuan $satuan)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }
      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.satuan.edit', compact('satuan', 'pengguna'));
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
          'nama_satuan' => 'required',
      ]);

      $satuan = satuan::find($request->id);
      $satuan->nama_satuan = $request->nama_satuan;
      $satuan->save();

      toast('Ubah data berhasil','success');

      return redirect()->route('admin.satuan.index');
  }

  public function show(Satuan $satuan)
  {
      if (! Gate::allows('inventaris_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.satuan.show', compact('satuan', 'pengguna'));
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

      $data = satuan::findOrFail($id);

      $data->delete();

      Alert::success('Berhasil', 'Di Hapus');

      return redirect()->route('admin.satuan.index');
  }
}
