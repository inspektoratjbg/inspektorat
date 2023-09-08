<?php

namespace App\Http\Controllers;

use App\Jabatan;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }

        // $jabatan = jabatan::all();
        $jabatan = DB::table('tb_jabatan')->paginate(10);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.jabatan.index', compact(['jabatan', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.jabatan.create', compact(['pengguna']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'nama_jabatan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_jabatan);

        return redirect()->route('admin.jabatan.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.jabatan.edit', compact('jabatan', 'pengguna'));
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
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }
        $this->validate($request, [
        	'nama_jabatan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        $jabatan = Jabatan::find($request->id);
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->created_by = $request->created_by;
        $jabatan->updated_by = $request->updated_by;
        $jabatan->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.jabatan.index');
    }

    public function show(jabatan $jabatan)
    {
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.jabatan.show', compact('jabatan', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('jabatan_manage')) {
            return abort(401);
        }

        $data = Jabatan::findOrFail($id);

        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.jabatan.index');
    }

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;

    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$jabatan = DB::table('tb_jabatan')
	// 	->where('nama_jabatan','like',"%".$cari."%")
    //     ->paginate();

    //     $pengguna = Auth::getUser();
    //     $pengguna = pegawai::where('nip', $pengguna['name'])->first();
    //     die();
    // 		// mengirim data pegawai ke view index
    //         return view('admin.jabatan.index', compact(['jabatan', 'pengguna']));

	// }
}
