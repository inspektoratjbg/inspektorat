<?php

namespace App\Http\Controllers;

use App\Golongan;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }

        // $golongan = Golongan::all();
        $golongan = DB::table('tb_golongan')->paginate(10);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.golongan.index', compact(['golongan', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.golongan.create', compact(['pengguna']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'nama_golongan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);
        
        golongan::create([
            'nama_golongan' => $request->nama_golongan,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_golongan);

        return redirect()->route('admin.golongan.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Golongan $golongan)
    {
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.golongan.edit', compact('golongan', 'pengguna'));
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
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }
        $this->validate($request, [
        	'nama_golongan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);  

        $golongan = Golongan::find($request->id);
        $golongan->nama_golongan = $request->nama_golongan;
        $golongan->created_by = $request->created_by;
        $golongan->updated_by = $request->updated_by;
        $golongan->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.golongan.index');
    }

    public function show(Golongan $golongan)
    {
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.golongan.show', compact('golongan', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('golongan_manage')) {
            return abort(401);
        }

        $data = Golongan::findOrFail($id);

        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.golongan.index');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$golongan = DB::table('tb_golongan')
		->where('nama_golongan','like',"%".$cari."%")
        ->paginate();
        
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        die();
    		// mengirim data pegawai ke view index
            return view('admin.golongan.index', compact(['golongan', 'pengguna']));
 
	}
}
