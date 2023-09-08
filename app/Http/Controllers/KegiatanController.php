<?php

namespace App\Http\Controllers;

use App\kegiatan;
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

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }

        $kegiatan = kegiatan::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.kegiatan.index', compact(['kegiatan', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }

        $gambar = gambar::where('kategori_gambar', 'like', '%'."kegiatan".'%')->get();
        $arsip = arsip::where('kategori_arsip', 'like', '%'.'kegiatan'.'%')->get();
        $tag = tag_berita::distinct()->get(['kategori_tag']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.kegiatan.create', compact(['gambar', 'arsip', 'pengguna', 'tag']));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }
        $arsip_kegiatan = json_encode($request->arsip_kegiatan);
        $foto_kegiatan = json_encode($request->foto_kegiatan);
        $tag_kegiatan = json_encode($request->tag_kegiatan);
        $isi_kegiatan = base64_encode($request->isi_kegiatan);
        $this->validate($request, [
            'judul_kegiatan' => 'required',
            'isi_kegiatan' => 'required',
            'tag_kegiatan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);
        
        kegiatan::create([
            'judul_kegiatan' => $request->judul_kegiatan,
            'isi_kegiatan' =>$isi_kegiatan,
            'slug_kegiatan' => Str::slug($request->judul_kegiatan),
            'foto_kegiatan' => $foto_kegiatan,
            'arsip_kegiatan' => $arsip_kegiatan,
            'tag_kegiatan' => $tag_kegiatan,
            'status_kegiatan' => $request->status_kegiatan,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_kegiatan);

        return redirect()->route('admin.kegiatan.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatan $kegiatan)
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }

        $gambar = gambar::where('kategori_gambar', 'like', '%'."kegiatan".'%')->get();
        $arsip = arsip::where('kategori_arsip', 'like', '%'.'kegiatan'.'%')->get();
        $tag = tag_berita::distinct()->get(['kategori_tag']);
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.kegiatan.edit', compact('kegiatan', 'pengguna', 'tag', 'arsip', 'gambar'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kegiatan $kegiatan)
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }
        $arsip_kegiatan = json_encode($request->arsip_kegiatan);
        $foto_kegiatan = json_encode($request->foto_kegiatan);
        $tag_kegiatan = json_encode($request->tag_kegiatan);
        $isi_kegiatan = base64_encode($request->isi_kegiatan);
        $this->validate($request, [
            'judul_kegiatan' => 'required',
            'isi_kegiatan' => 'required',
            'tag_kegiatan' => 'required',
            'status_kegiatan' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);  


        echo $request->id;

        $kegiatan = kegiatan::where('id',$request->id)->first();
        $kegiatan = $kegiatan->nama_kegiatan;
        $tag = json_encode($request->tag_kegiatan);
        $kategori = json_encode($request->kategori_kegiatan);
        $file = $kegiatan;

        
        $kegiatan = kegiatan::find($request->id);
        $kegiatan->judul_kegiatan = $request->judul_kegiatan;
        $kegiatan->isi_kegiatan = $isi_kegiatan;
        $kegiatan->foto_kegiatan = $foto_kegiatan;
        $kegiatan->arsip_kegiatan = $arsip_kegiatan;
        $kegiatan->tag_kegiatan = $tag_kegiatan;
        $kegiatan->status_kegiatan = $request->status_kegiatan;
        $kegiatan->created_by = $request->created_by;
        $kegiatan->updated_by = $request->updated_by;
        $kegiatan->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.kegiatan.index');
    }

    public function show(kegiatan $kegiatan)
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.kegiatan.show', compact('kegiatan', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }

        $data = kegiatan::findOrFail($id);
        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.kegiatan.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('kegiatan_manage')) {
            return abort(401);
        }
        kegiatan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
