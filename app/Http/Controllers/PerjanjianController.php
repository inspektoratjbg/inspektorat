<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Tupoksi;
use App\Perjanjian;
use App\Program;
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

class perjanjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list($id)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'desc')
                    ->get()
                    ->toArray();
        $program = Program::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'desc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.perjanjian.list', compact(['sakip', 'program', 'perjanjian', 'pengguna']));
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
            'jenis_kegiatan' => 'required',
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
            'formulasi' => '',
            'sumber_data' => '',
            'penanggung_jawab' => '',
            'skp_target_ak' => '',
            'skp_target_mutu' => '',
            'skp_target_waktu' => '',
            'skp_realisasi_ak' => '',
            'skp_realisasi_ouput' => '',
            'skp_realisasi_mutu' => '',
            'skp_realisasi_waktu' => '',
            'urutan_per_tahun' => $request->urutan_per_tahun,
            'jenis_kegiatan' => $request->jenis_kegiatan,
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

        $perjanjian = perjanjian::where('id',$perjanjian)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.perjanjian.edit', compact('perjanjian', 'pengguna'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perjanjian $perjanjian)
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
            'jenis_kegiatan' => 'required',
            'created_by' => 'required',
        ]);

        $id= $request->id_sakip;

        $perjanjian = perjanjian::find($request->id);
        $perjanjian->sasaran = $request->sasaran;
        $perjanjian->indikator_kinerja = $request->indikator_kinerja;
        $perjanjian->satuan = $request->satuan;
        $perjanjian->target = $request->target;
        $perjanjian->urutan_per_tahun = $request->urutan_per_tahun;
        $perjanjian->jenis_kegiatan = $request->jenis_kegiatan;
        $perjanjian->created_by = $request->created_by;
        $perjanjian->id_sakip = $request->id_sakip;
        $perjanjian->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.perjanjian.list', $id);
    }

    public function show($perjanjian)
    {
        if (! Gate::allows('perjanjian_sakip_manage')) {
            return abort(401);
        }

        $perjanjian = perjanjian::where('id',$perjanjian)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.perjanjian.show', compact('perjanjian', 'pengguna'));
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
        $id = $data->id_sakip;
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.perjanjian.list', $id);
    }

    public function print($id)
    {
        //GET DATA BERDASARKAN ID
        $sakip = Sakip::where('id', $id)->first();
        $perjanjian = Perjanjian::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $program = Program::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.perjanjian.print', compact(['sakip', 'program', 'perjanjian', 'pengguna']))->setPaper('folio', 'potrait');
        return $pdf->stream();
    }

    public function sasaran($id)
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
        $pdf = PDF::loadView('admin.perjanjian.sasaran', compact(['sakip', 'program', 'perjanjian', 'perjanjiann', 'pengguna']))->setPaper('folio', 'landscape');
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
        $capaian = $perjanjian;
        $penutup = $perjanjian;
        $program = Program::where('id_sakip', $id)
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $tugaspokok = Tupoksi::where('id_sakip', $id)
                    ->where('tipe_indikator', '1')
                    ->orderBy('urutan_per_tahun', 'asc')
                    ->get()
                    ->toArray();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // die();
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.perjanjian.laporan', compact(['penutup', 'sakip', 'program', 'tugaspokok', 'perjanjian', 'capaian', 'pengguna']))->setPaper('folio', 'potrait');
        return $pdf->stream();
    }
}
