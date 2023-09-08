<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Perjanjian;
use App\pegawai;
use File;
use PDF;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PengukuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $sakip = Sakip::where('id', $id)->first();
        // echo print_r($sakip);
        echo $sakip->nama_pihak_pertama;
        die();
        $perjanjian = Perjanjian::distinct()->get(['tahun']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.perjanjian.index', compact(['perjanjian', 'pengguna']));
    }

    public function list($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $sakip = Sakip::where('id', $id)->first();
        $pengukuran = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'desc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();


        return view('admin.pengukuran.list', compact(['sakip', 'pengukuran', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $pengukuran = Perjanjian::where('id',$perjanjian)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.pengukuran.edit', compact('pengukuran', 'pengguna'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjanjian $perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'realisasi' => 'required',
            'created_by' => 'required',
        ]);  
        
        $id= $request->id_sakip;
        $capaian = ($request->realisasi/$request->target)*100;
        // die();

        $perjanjian = perjanjian::find($request->id);
        $perjanjian->realisasi = $request->realisasi;
        $perjanjian->capaian = $capaian;
        $perjanjian->created_by = $request->created_by;
        $perjanjian->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.pengukuran.list', $id);
    }

    public function show($perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $pengukuran = Perjanjian::where('id',$perjanjian)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.pengukuran.show', compact('pengukuran', 'pengguna'));
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

        $data = Perjanjian::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.perjanjian.index');
    }

    public function print($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.pengukuran.print', compact(['sakip', 'perjanjian', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }

    public function tahunan($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.pengukuran.tahunan', compact(['sakip', 'perjanjian', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }

    public function laporan($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.pengukuran.laporan', compact(['sakip', 'perjanjian', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }
}
