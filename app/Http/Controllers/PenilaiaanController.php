<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Prestasi;
use App\Program ;
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
use Illuminate\Support\Facades\DB;

class PenilaiaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function menu($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }


        $sakip = Sakip::where('id', $id)->first();
        $pengukuran = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'desc')
                    ->get()
                    ->toArray();
        $skp = $pengukuran;
        $penilaiaan = Prestasi::where('id_sakip', $id)->get();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();


        return view('admin.penilaiaan.menu', compact(['sakip', 'pengukuran', 'skp', 'penilaiaan', 'pengguna']));
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
    public function skpprogress($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $skp = Perjanjian::where('id',$id)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.penilaiaan.skpprogress', compact('skp', 'pengguna'));
    }

    public function pengukuranprogress($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $pengukuran = Perjanjian::where('id',$id)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.penilaiaan.pengukuranprogress', compact('pengukuran', 'pengguna'));
    }

    public function penilaiaanprogress($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $prestasi = Prestasi::where('id',$id)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.penilaiaan.penilaiaanprogress', compact('prestasi', 'pengguna'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function skpupdate(Request $request, Perjanjian $perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'skp_target_ak' => 'required',
            'skp_target_mutu' => 'required',
            'skp_target_waktu' => 'required',
        ]);  
        
        $id= $request->id_sakip;

        $perjanjian = perjanjian::find($request->id);
        $perjanjian->skp_target_ak = $request->skp_target_ak;
        $perjanjian->skp_target_mutu = $request->skp_target_mutu;
        $perjanjian->skp_target_waktu = $request->skp_target_waktu;
        $perjanjian->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.penilaiaan.menu', $id);
    }

    public function pengukuranupdate(Request $request, Perjanjian $perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'skp_realisasi_ak' => 'required',
            'skp_realisasi_ouput' => 'required',
            'skp_realisasi_mutu' => 'required',
            'skp_realisasi_waktu' => 'required',
        ]);  
        
        $id= $request->id_sakip;

        $perjanjian = perjanjian::find($request->id);
        $perjanjian->skp_realisasi_ak = $request->skp_realisasi_ak;
        $perjanjian->skp_realisasi_ouput = $request->skp_realisasi_ouput;
        $perjanjian->skp_realisasi_mutu = $request->skp_realisasi_mutu;
        $perjanjian->skp_realisasi_waktu = $request->skp_realisasi_waktu;
        $perjanjian->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.penilaiaan.menu', $id);
    }

    public function penilaiaanupdate(Request $request, Prestasi $prestasi)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'pelayanan' => 'required',
            'integritas' => 'required',
            'komitmen' => 'required',
            'disiplin' => 'required',
            'kerjasama' => 'required',
            'kepemimpinan' => 'required',
        ]);  
        
        $id= $request->id_sakip;

        $perjanjian = Prestasi::find($request->id);
        $perjanjian->pelayanan = $request->pelayanan;
        $perjanjian->integritas = $request->integritas;
        $perjanjian->komitmen = $request->komitmen;
        $perjanjian->disiplin = $request->disiplin;
        $perjanjian->kerjasama = $request->kerjasama;
        $perjanjian->kepemimpinan = $request->kepemimpinan;
        $perjanjian->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.penilaiaan.menu', $id);
    }

    public function skpprint($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $perjanjiann =$perjanjian;
        $program = Program::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.penilaiaan.skpprint', compact(['sakip', 'program', 'perjanjian', 'perjanjiann', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }

    public function pengukuranprint($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $perjanjiann =$perjanjian;
        $program = Program::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.penilaiaan.pengukuranprint', compact(['sakip', 'program', 'perjanjian', 'perjanjiann', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }

    public function penilaiaanprint($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        // $kepala = pegawai::where('peran_pegawai', '15')->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $kepala = DB::table('tb_pegawai')
                ->join('tb_status_pegawai', 'tb_status_pegawai.id', '=', 'tb_pegawai.divisi_pegawai')
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan' , 'tb_status_pegawai.status_kepegawaiaan')
                ->where('tb_pegawai.peran_pegawai', '15')
                ->first();
        $nilai = Prestasi::where('id_sakip', $id)->first();

        // die();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.penilaiaan.penilaiaanprint', compact(['sakip', 'perjanjian', 'nilai', 'kepala', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }
}
