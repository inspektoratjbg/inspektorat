<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Tupoksi;
use App\pegawai;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TupoksiController extends Controller
{
    public function tambah($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        } 
        $sakip = $id;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tupoksi.create', compact(['sakip', 'pengguna']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'id_sakip' => 'required',
            'indikator' => 'required',
            'tipe_indikator' => 'required',
            'urutan_per_tahun' => 'required',
            'created_by' => 'required',
        ]);
        
        Tupoksi::create([
            'id_sakip' => $request->id_sakip,
            'indikator' => $request->indikator,
            'tipe_indikator' => $request->tipe_indikator,
            'urutan_per_tahun' => $request->urutan_per_tahun,
            'created_by' => $request->created_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->tupoksi);

        return redirect()->route('admin.indikator.list', $request->id_sakip);
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tupoksi)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $tupoksi = Tupoksi::where('id',$tupoksi)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tupoksi.edit', compact('tupoksi', 'pengguna'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tupoksi $tupoksi)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'id_sakip' => 'required',
            'indikator' => 'required',
            'tipe_indikator' => 'required',
            'urutan_per_tahun' => 'required',
            'created_by' => 'required',
        ]);  
        
        $id= $request->id_sakip;

        $tupoksi = Tupoksi::find($request->id);
        $tupoksi->indikator = $request->indikator;
        $tupoksi->tipe_indikator = $request->tipe_indikator;
        $tupoksi->urutan_per_tahun = $request->urutan_per_tahun;
        $tupoksi->created_by = $request->created_by;
        $tupoksi->id_sakip = $request->id_sakip;
        $tupoksi->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.indikator.list', $id);
    }

    public function show($tupoksi)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $tupoksi = Tupoksi::where('id',$tupoksi)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tupoksi.show', compact('tupoksi', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        $tupoksi = Tupoksi::where('id',$id)->first();

        $data = Tupoksi::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.indikator.list', $tupoksi->id_sakip);
    }
}
