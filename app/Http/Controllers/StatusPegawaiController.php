<?php

namespace App\Http\Controllers;

use App\Status;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class StatusPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }

        // $status = status::all();
        $status = DB::table('tb_status_pegawai')->paginate(10);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.status.index', compact(['status', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.status.create', compact(['pengguna']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'status_kepegawaiaan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);
        
        status::create([
            'status_kepegawaiaan' => $request->status_kepegawaiaan,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_status);

        return redirect()->route('admin.status.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.status.edit', compact('status', 'pengguna'));
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
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }
        $this->validate($request, [
        	'status_kepegawaiaan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);  

        $status = status::find($request->id);
        $status->status_kepegawaiaan = $request->status_kepegawaiaan;
        $status->created_by = $request->created_by;
        $status->updated_by = $request->updated_by;
        $status->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.status.index');
    }

    public function show(Status $status)
    {
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.status.show', compact('status', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('status_pegawai_manage')) {
            return abort(401);
        }

        $data = status::findOrFail($id);

        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.status.index');
    }

}
