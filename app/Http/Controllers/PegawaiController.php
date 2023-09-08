<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\Status;
use App\Jabatan;
use App\Golongan;
use App\Opd;
use App\gambar;
use App\Helpers\ApiFormater;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api_peg()
    {
       
        $data = pegawai::all();
        
        if ($data) {
            return ApiFormater::createApi(200, 'Success', $data);
        } else {
            return ApiFormater::createApi(400, 'Failed');
        }
    }
    public function api_opd()
    {
       
        $data = Opd::all();
        
        if ($data) {
            return ApiFormater::createApi(200, 'Success', $data);
        } else {
            return ApiFormater::createApi(400, 'Failed');
        }
    }
    public function api_peg_get(Request $request)
    {
        if ($request->ajax()) {
            $data = pegawai::wherenull('deleted_at');
          
            $row = DataTables::of($data)
                ->addColumn('action', function ($role) {
                    $btn = "<div class='btn-group'>";
                    $btn .= '<a href="' . url('PegawaiJajal.edit/', $role->id) . '" class="badge badge-success"><i class=" fas fa-pencil-alt"></i> </a>';
                    $btn .= '<a href="'.url('PegawaiJajal_delete/', $role->id).'"  class="hapus badge badge-danger"><i class="fas fa-trash-alt"></i> </a>';
                    $btn .= "</div>";
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);

            Activity('data')
                ->withProperties($row)
                ->log('akses list data pekerjaan');
            return $row;
        }
        return view('jajal');
        // $data = Http::get('https://inspektorat.jombangkab.go.id/pegawai_api');
        // $hasil = $data->json();
        // dd($hasil);
    
    }
    public function api_opd_get()
    {
        return view('opd');    
    }
    public function index()
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }
        $pegawai = DB::table('tb_pegawai')
                ->join('tb_status_pegawai', 'tb_status_pegawai.id', '=', 'tb_pegawai.divisi_pegawai')
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                // ->join('tb_status_pegawai', 'tb_status_pegawai.id', '=', 'tb_pegawai.divisi_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan')
                // ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan', 'tb_status_pegawai.status_kepegawaiaan')
                ->get();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        // echo print_r($pegawai);
        // die();

        return view('admin.pegawai.index', compact(['pegawai', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }

        $peg='pegawai';
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        $status = Status::all();
        $gambar = DB::table('tb_gambar')->where('kategori_gambar', 'like', '%'.$peg.'%')->get();
        $arsip = DB::table('tb_arsip')->where('kategori_arsip', 'like', '%'.$peg.'%')->get();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.pegawai.create', compact(['gambar', 'arsip', 'pengguna', 'status', 'jabatan', 'golongan']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }
        $arsip_pegawai = json_encode($request->arsip_pegawai);
        $foto_pegawai = json_encode($request->foto_pegawai);
        $this->validate($request, [
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'divisi_pegawai' => 'required',
            'peran_pegawai' => 'required',
            'golongan_pegawai' => 'required',
            'pesan_pegawai' => 'required',
            'foto_pegawai' => 'required',
            'status' => 'required',
            'created_by' => 'required',
        ]);

        pegawai::create([
            'nip' => $request->nip,
            'nama_pegawai' => $request->nama_pegawai,
            'divisi_pegawai' => $request->divisi_pegawai,
            'peran_pegawai' => $request->peran_pegawai,
            'golongan_pegawai' => $request->golongan_pegawai,
            'pesan_pegawai' => $request->pesan_pegawai,
            'foto_pegawai' => $foto_pegawai,
            'arsip_pegawai' => $arsip_pegawai,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_pegawai);

        return redirect()->route('admin.pegawai.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pegawai $pegawai)
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }
        $peg='pegawai';
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        $status = Status::all();
        $gambar = DB::table('tb_gambar')->where('kategori_gambar', 'like', '%'.$peg.'%')->get();
        $arsip = DB::table('tb_arsip')->where('kategori_arsip', 'like', '%'.$peg.'%')->get();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.pegawai.edit', compact('pegawai', 'pengguna', 'arsip', 'gambar', 'status', 'jabatan', 'golongan'));
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
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }
        $arsip_pegawai = json_encode($request->arsip_pegawai);
        $foto_pegawai = json_encode($request->foto_pegawai);
        $this->validate($request, [
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'divisi_pegawai' => 'required',
            'peran_pegawai' => 'required',
            'golongan_pegawai' => 'required',
            'pesan_pegawai' => 'required',
            'foto_pegawai' => 'required',
            'status' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        $pegawai = pegawai::find($request->id);
        $pegawai->nip = $request->nip;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->divisi_pegawai = $request->divisi_pegawai;
        $pegawai->peran_pegawai = $request->peran_pegawai;
        $pegawai->golongan_pegawai = $request->golongan_pegawai;
        $pegawai->pesan_pegawai = $request->pesan_pegawai;
        $pegawai->foto_pegawai = $foto_pegawai;
        $pegawai->arsip_pegawai = $arsip_pegawai;
        $pegawai->status = $request->status;
        $pegawai->created_by = $request->created_by;
        $pegawai->updated_by = $request->updated_by;
        $pegawai->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.pegawai.index');
    }

    public function show($idd)
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }

        $pegawai = DB::table('tb_pegawai')
                ->join('tb_status_pegawai', 'tb_status_pegawai.id', '=', 'tb_pegawai.divisi_pegawai')
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan' , 'tb_status_pegawai.status_kepegawaiaan')
                ->where('tb_pegawai.id', $idd)
                ->get();

        // echo print_r($pegawai);
        // echo $pegawai[0]->status_kepegawaiaan;
        // die();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.pegawai.show', compact('pegawai', 'pengguna'));
    }

    public function lihat($idd)
    {
        if (! Gate::allows('view_manage')) {
            return abort(401);
        }
        $pegawai = DB::table('tb_pegawai')
                ->join('tb_status_pegawai', 'tb_status_pegawai.id', '=', 'tb_pegawai.divisi_pegawai')
                ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
                ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
                ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan' , 'tb_status_pegawai.status_kepegawaiaan')
                ->where('tb_pegawai.id', $idd)
                ->get();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        $pegawai = $pengguna;

        return view('admin.pegawai.lihat', compact('pegawai', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }

        $data = pegawai::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.pegawai.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('pegawai_manage')) {
            return abort(401);
        }
        pegawai::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
