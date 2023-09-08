<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\Disposisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDisposisiRequest;
use App\Http\Requests\Admin\UpdateDisposisiRequest;
use Illuminate\Support\Facades\Auth;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }

        $disposisi = Disposisi::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.disposisi.index', compact(['disposisi', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.disposisi.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisposisiRequest $request)
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }
        $disposisi = Disposisi::create($request->all());
        // $roles = $request->input('roles') ? $request->input('roles') : [];
        // $user->assignRole($roles);

        return redirect()->route('admin.disposisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function show(Disposisi $disposisi)
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.disposisi.show', compact(['disposisi', 'pengguna']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposisi $disposisi)
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.disposisi.edit', compact(['disposisi', 'pengguna']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisposisiRequest $request, Disposisi $disposisi)
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }

        $disposisi->update($request->all());

        return redirect()->route('admin.disposisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disposisi  $disposisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disposisi $disposisi)
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }
        // echo $user;

        // die();
        $disposisi->delete();

        return redirect()->route('admin.disposisi.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('disposisi_manage')) {
            return abort(401);
        }
        // echo $user;

        // die();
        Disposisi::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
