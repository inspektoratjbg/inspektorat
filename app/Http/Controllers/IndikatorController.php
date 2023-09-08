<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Perjanjian;
use App\Tupoksi;
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

class IndikatorController extends Controller
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
        $indikator = Perjanjian::where('id_sakip', $id)
                    ->where('jenis_kegiatan', '1')
                    ->orderBy('urutan_per_tahun', 'desc')
                    ->get()
                    ->toArray();
        
        $tupoksi = Tupoksi::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'desc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();


        return view('admin.indikator.list', compact(['sakip', 'indikator', 'tupoksi', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        echo $id;
        die(); 
        $pegawai = pegawai::all();
        $pegawaikedua = $pegawai;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.perjanjian.create', compact(['pegawai', 'pegawaikedua', 'pengguna']));
    }

    public function tambah($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        } 
        $sakip = $id;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.perjanjian.create', compact(['sakip', 'pengguna']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'id_sakip' => 'required',
            'sasaran' => 'required',
            'indikator_kinerja' => 'required',
            'satuan' => 'required',
            'target' => 'required',
            'urutan_per_tahun' => 'required',
            'created_by' => 'required',
        ]);
        
        Perjanjian::create([
            'id_sakip' => $request->id_sakip,
            'sasaran' => $request->sasaran,
            'indikator_kinerja' => $request->indikator_kinerja,
            'satuan' => $request->satuan,
            'target' => $request->target,
            'realisasi' => 0,
            'capaian' => 0,
            'urutan_per_tahun' => $request->urutan_per_tahun,
            'created_by' => $request->created_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->sasaran);

        return redirect()->route('admin.perjanjian.list', $request->id_sakip);
    }


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

        $indikator = Perjanjian::where('id',$perjanjian)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.indikator.edit', compact('indikator', 'pengguna'));
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
            'formulasi' => 'required',
            'sumber_data' => 'required',
            'penanggung_jawab' => 'required',
            'created_by' => 'required',
        ]);  
        
        $id= $request->id_sakip;

        $perjanjian = Perjanjian::find($request->id);
        $perjanjian->formulasi = $request->formulasi;
        $perjanjian->sumber_data = $request->sumber_data;
        $perjanjian->penanggung_jawab = $request->penanggung_jawab;
        $perjanjian->created_by = $request->created_by;
        $perjanjian->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.indikator.list', $id);
    }

    public function show($perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $indikator = Perjanjian::where('id',$perjanjian)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.indikator.show', compact('indikator', 'pengguna'));
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
                    ->where('jenis_kegiatan', '1')
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $tugaspokok = Tupoksi::where('id_sakip', $id)
                    ->where('tipe_indikator', '1')
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $fungsi = Tupoksi::where('id_sakip', $id)
                    ->where('tipe_indikator', '2')
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.indikator.print', compact(['sakip', 'tugaspokok', 'fungsi', 'perjanjian', 'pengguna']))->setPaper('folio', 'landscape');
        return $pdf->stream();
    }
}
