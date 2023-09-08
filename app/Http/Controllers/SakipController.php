<?php

namespace App\Http\Controllers;

use App\Sakip;
use App\Prestasi;
use App\Pesan;
use App\pegawai;
use App\Perjanjian;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SakipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // $sakip = Sakip::where('nip_pihak_pertama', '003')->first();
        $sakip = Sakip::where('nip_pihak_pertama', $pengguna->nip)
                    ->orderBy('id', 'desc')
                    ->get()
                    ->toArray();

        return view('admin.sakip.index', compact(['sakip', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $pegawai = pegawai::all();
        $pegawaikedua = $pegawai;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakip.create', compact(['pegawai', 'pegawaikedua', 'pengguna']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }
        $pihakpertama = DB::table('tb_pegawai')
                ->where('tb_pegawai.nip', $request->nip_pihak_pertama)
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan')
                ->first();
        $pihakkedua = DB::table('tb_pegawai')
                ->where('tb_pegawai.nip', $request->nip_pihak_kedua)
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan')
                ->first();


        $this->validate($request, [
            'nip_pihak_pertama' => 'required',
            'nip_pihak_kedua' => 'required',
            'tahun' => 'required',
            'tanggal_surat' => 'required',
            'created_by' => 'required',
        ]);


        sakip::create([
            'tipe_sakip' => $request->tipe_sakip,
            'nip_pihak_pertama' => $request->nip_pihak_pertama,
            'nip_pihak_kedua' => $request->nip_pihak_kedua,
            'tahun' => $request->tahun,
            'tanggal_surat' => $request->tanggal_surat,
            'nama_pihak_pertama' => $pihakpertama->nama_pegawai,
            'jabatan_pihak_pertama' => $pihakpertama->nama_jabatan,
            'golongan_pihak_pertama' => $pihakpertama->nama_golongan,
            'nama_pihak_kedua' => $pihakkedua->nama_pegawai,
            'jabatan_pihak_kedua' => $pihakkedua->nama_jabatan,
            'golongan_pihak_kedua' => $pihakkedua->nama_golongan,
            'status1' => '2',
            'status2' => '2',
            'status3' => '2',
            'status4' => '2',
            'created_by' => $request->created_by,
        ]);

        $data = DB::table('tb_sakip')
                ->latest()
                ->first();

        Prestasi::create([
            'id_sakip' => $data->id,
            'pelayanan' => '-',
            'integritas' => '-',
            'komitmen' => '-',
            'disiplin' => '-',
            'kerjasama' => '-',
            'kepemimpinan' => '-',
            'created_by' => $request->created_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->tipe_sakip);

        return redirect()->route('admin.sakip.index');
    }

    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sakip)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $sakip = sakip::where('id',$sakip)->first();
        $pegawai = pegawai::all();
        $pegawaikedua = $pegawai;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakip.edit', compact('sakip', 'pengguna', 'pegawai', 'pegawaikedua'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sakip $sakip)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $pihakpertama = DB::table('tb_pegawai')
                ->where('tb_pegawai.nip', $request->nip_pihak_pertama)
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan')
                ->first();
        $pihakkedua = DB::table('tb_pegawai')
                ->where('tb_pegawai.nip', $request->nip_pihak_kedua)
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan')
                ->first();

        $this->validate($request, [
            'nip_pihak_pertama' => 'required',
            'nip_pihak_kedua' => 'required',
            'tahun' => 'required',
            'tanggal_surat' => 'required',
            'created_by' => 'required',
        ]);

        $sakip = Sakip::find($request->id);
        $sakip->tipe_sakip = $request->tipe_sakip;
        $sakip->nip_pihak_pertama = $request->nip_pihak_pertama;
        $sakip->nip_pihak_kedua = $request->nip_pihak_kedua;
        $sakip->tahun = $request->tahun;
        $sakip->tanggal_surat = $request->tanggal_surat;
        $sakip->nama_pihak_pertama = $pihakpertama->nama_pegawai;
        $sakip->jabatan_pihak_pertama = $pihakpertama->nama_jabatan;
        $sakip->golongan_pihak_pertama = $pihakpertama->nama_golongan;
        $sakip->nama_pihak_kedua = $pihakkedua->nama_pegawai;
        $sakip->jabatan_pihak_kedua = $pihakkedua->nama_jabatan;
        $sakip->golongan_pihak_kedua = $pihakkedua->nama_golongan;
        $sakip->created_by = $request->created_by;
        $sakip->save();

        Alert::success('Berhasil Di Ubah', $request->tipe_sakip);

        return redirect()->route('admin.sakip.index');
    }

    public function show($sakip)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $sakip = sakip::where('id',$sakip)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakip.show', compact('sakip', 'pengguna'));
    }

    public function pesan($id)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $pesan = Pesan::where('id_sakip',$id)->orderBy('id', 'DESC')->get();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakip.pesan', compact('pesan', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }

        $data = sakip::findOrFail($id);
        $data->delete();
        $deletedRows = Perjanjian::where('id_sakip', $id)->delete();
        // $deleted = Program::where('id_sakip', $id)->delete();
        // $deleRows = Tupoksi::where('id_sakip', $id)->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.sakip.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('sakip_manage')) {
            return abort(401);
        }
        sakip::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
