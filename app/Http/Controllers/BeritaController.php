<?php

namespace App\Http\Controllers;

use App\berita;
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

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $berita = berita::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.berita.index', compact(['berita', 'pengguna']));
    }

    public function galeri()
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $berita = DB::table('tb_jabatan')->paginate(6);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.berita.index', compact(['berita', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }
        $gambar = gambar::where('kategori_gambar', 'like', '%'."berita".'%')->orWhere('kategori_gambar', 'like', '%'."header".'%')->get();
        $arsip = arsip::where('kategori_arsip', 'like', '%'.'berita'.'%')->get();
        $tag = tag_berita::distinct()->get(['nama_tag']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.berita.create', compact(['gambar', 'arsip', 'pengguna', 'tag']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }
        $arsip_berita = json_encode($request->arsip_berita);
        $foto_berita = json_encode($request->foto_berita);
        $tag_berita = json_encode($request->tag_berita);
        $isi_berita = base64_encode($request->isi_berita);
        $this->validate($request, [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'tag_berita' => 'required',
            'tgl_publikasi' => 'required',
            'status_berita' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);
        
        berita::create([
            'judul_berita' => $request->judul_berita,
            'isi_berita' =>$isi_berita,
            'slug_berita' => Str::slug($request->judul_berita),
            'foto_berita' => $foto_berita,
            'arsip_berita' => $arsip_berita,
            'tag_berita' => $tag_berita,
            'status_berita' => $request->status_berita,
            'tgl_publikasi' => $request->tgl_publikasi,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_berita);

        return redirect()->route('admin.berita.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($berita)
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $berita = berita::where('id',$berita)->first();

        $gambar = gambar::where('kategori_gambar', 'like', '%'."berita".'%')->where('kategori_gambar', 'like', '%'."header".'%')->get();
        $arsip = arsip::where('kategori_arsip', 'like', '%'.'berita'.'%')->get();
        $tag = tag_berita::distinct()->get(['nama_tag']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.berita.edit', compact('berita', 'pengguna', 'tag', 'arsip', 'gambar'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $arsip_berita = json_encode($request->arsip_berita);
        $foto_berita = json_encode($request->foto_berita);
        $tag_berita = json_encode($request->tag_berita);
        $isi_berita = base64_encode($request->isi_berita);
        $this->validate($request, [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'tag_berita' => 'required',
            'tgl_publikasi' => 'required',
            'status_berita' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);  


        echo $request->id;

        $berita = berita::where('id',$request->id)->first();
        $berita = $berita->nama_berita;
        $tag = json_encode($request->tag_berita);
        $kategori = json_encode($request->kategori_berita);
        $file = $berita;

        
        $berita = berita::find($request->id);
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $isi_berita;
        $berita->foto_berita = $foto_berita;
        $berita->arsip_berita = $arsip_berita;
        $berita->tag_berita = $tag_berita;
        $berita->status_berita = $request->status_berita;
        $berita->tgl_publikasi = $request->tgl_publikasi;
        $berita->created_by = $request->created_by;
        $berita->updated_by = $request->updated_by;
        $berita->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.berita.index');
    }

    public function show($berita)
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $berita = berita::where('id',$berita)->first();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.berita.show', compact('berita', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $data = berita::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.berita.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }
        berita::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
