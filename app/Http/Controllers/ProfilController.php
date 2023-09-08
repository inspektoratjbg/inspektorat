<?php

namespace App\Http\Controllers;

use App\profil;
use App\pegawai;
use App\arsip;
use App\gambar;
use App\tag_berita;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }

        $profil = profil::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.profil.index', compact(['profil', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }
        $gambar = gambar::where('kategori_gambar', 'like', '%'."profil".'%')->get();
        $arsip = arsip::where('kategori_arsip', 'like', '%'.'profil'.'%')->get();
        $tag = tag_berita::distinct()->get(['kategori_tag']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.profil.create', compact(['gambar', 'arsip', 'pengguna', 'tag']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }
        $arsip_profil = json_encode($request->arsip_profil);
        $foto_profil = json_encode($request->foto_profil);
        $tag_profil = json_encode($request->tag_profil);
        $isi_profil = base64_encode($request->isi_profil);
        $this->validate($request, [
            'judul_profil' => 'required',
            'isi_profil' => 'required',
            'tag_profil' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        profil::create([
            'judul_profil' => $request->judul_profil,
            'isi_profil' =>$isi_profil,
            'slug_profil' => Str::slug($request->judul_profil),
            'foto_profil' => $foto_profil,
            'arsip_profil' => $arsip_profil,
            'tag_profil' => $tag_profil,
            'status_profil' => $request->status_profil,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_profil);

        return redirect()->route('admin.profil.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(profil $profil)
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }
        $gambar = gambar::where('kategori_gambar', 'like', '%'."profil".'%')->get();
        $arsip = arsip::where('kategori_arsip', 'like', '%'.'profil'.'%')->get();
        $tag = tag_berita::distinct()->get(['kategori_tag']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        

        return view('admin.profil.edit', compact('profil', 'pengguna', 'tag', 'arsip', 'gambar'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profil $profil)
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }
        $arsip_profil = json_encode($request->arsip_profil);
        $foto_profil = json_encode($request->foto_profil);
        $tag_profil = json_encode($request->tag_profil);
        $isi_profil = base64_encode($request->isi_profil);
        $this->validate($request, [
            'judul_profil' => 'required',
            'isi_profil' => 'required',
            'tag_profil' => 'required',
            'status_profil' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);


        echo $request->id;

        $profil = profil::where('id',$request->id)->first();
        $profil = $profil->nama_profil;
        $tag = json_encode($request->tag_profil);
        $kategori = json_encode($request->kategori_profil);
        $file = $profil;


        $profil = profil::find($request->id);
        $profil->judul_profil = $request->judul_profil;
        $profil->isi_profil = $isi_profil;
        $profil->foto_profil = $foto_profil;
        $profil->arsip_profil = $arsip_profil;
        $profil->tag_profil = $tag_profil;
        $profil->status_profil = $request->status_profil;
        $profil->created_by = $request->created_by;
        $profil->updated_by = $request->updated_by;
        $profil->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.profil.index');
    }

    public function show(profil $profil)
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.profil.show', compact('profil', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }

        $data = profil::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.profil.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('profil_manage')) {
            return abort(401);
        }
        profil::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

}
