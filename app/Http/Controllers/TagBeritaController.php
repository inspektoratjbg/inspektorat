<?php

namespace App\Http\Controllers;

use App\tag_berita;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;
use Illuminate\Support\Facades\Auth;

class TagBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

        $tag = tag_berita::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tag.index', compact(['tag', 'pengguna']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tag.create', compact(['pengguna']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        $tag = tag_berita::create($request->all());

        return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tag_berita  $tag_berita
     * @return \Illuminate\Http\Response
     */
    public function show(tag_berita $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tag.show', compact(['tag', 'pengguna']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tag_berita  $tag_berita
     * @return \Illuminate\Http\Response
     */
    public function edit(tag_berita $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.tag.edit', compact(['tag', 'pengguna']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tag_berita  $tag_berita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest$request, tag_berita $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

        $tag->update($request->all());

        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tag_berita  $tag_berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(tag_berita $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        // echo $user;

        // die();
        $tag->delete();

        return redirect()->route('admin.tag.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('tag_berita_manage')) {
            return abort(401);
        }
        // echo $user;

        // die();
        tag_berita::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
