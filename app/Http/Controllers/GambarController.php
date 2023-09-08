<?php

namespace App\Http\Controllers;

use App\gambar;
use App\pegawai;
use App\tag_berita;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }

        $gambar = gambar::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.gambar.index', compact(['gambar', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }
        $tag = tag_berita::distinct()->get(['kategori_tag']);
        // MyModel::distinct()->get(['column_name']);
        $tagall = tag_berita::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.gambar.create', compact(['tagall', 'pengguna', 'tag']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }

        $tag = json_encode($request->tag_gambar);
        $kategori = json_encode($request->kategori_gambar);
        $this->validate($request, [
            'judul_gambar' => 'required',
            'nama_gambar' => 'required|file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
            'kategori_gambar' => 'required',
            'tag_gambar' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        if($request->hasfile('nama_gambar'))
         {
            $name=date("Y-m-d").'-'.Str::slug($request->judul_gambar).'-'.date("h-i-sa").'-'.$request->file('nama_gambar')->getClientOriginalName();
            $request->file('nama_gambar')->move(public_path('upload/gambar'), $name);

            $lampiran = $name;
         }

        gambar::create([
            'judul_gambar' => $request->judul_gambar,
            'nama_gambar' => $lampiran,
            'kategori_gambar' => $kategori,
            'tag_gambar' => $tag,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_gambar);

        return redirect()->route('admin.gambar.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gambar $gambar)
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }

        $tag = tag_berita::distinct()->get(['kategori_tag']);
        // MyModel::distinct()->get(['column_name']);
        $tagall = tag_berita::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.gambar.edit', compact('gambar', 'pengguna', 'tag', 'tagall'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gambar $gambar)
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }
        $this->validate($request, [
        	  'judul_gambar' => 'required',
            'nama_gambar' => 'file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
            'kategori_gambar' => 'required',
            'tag_gambar' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);
        // $wkwk = gambar::where('no_gambar',$request->no_gambar)->first();
        // echo print_r($wkwk->lampiran);


        $gambar = gambar::where('id',$request->id)->first();
        $gambar = $gambar->nama_gambar;
        $tag = json_encode($request->tag_gambar);
        $kategori = json_encode($request->kategori_gambar);
        $lampiran = $gambar;

        if ($request->file('nama_gambar')!=null) {

            File::delete(public_path('upload/gambar/').$gambar);


            if($request->hasfile('nama_gambar'))
             {

                $name=date("Y-m-d").'-'.Str::slug($request->judul_gambar).'-'.date("h-i-sa").'-'.$request->file('nama_gambar')->getClientOriginalName();
                $request->file('nama_gambar')->move(public_path('upload/gambar'), $name);

                $lampiran = $name;
             }
        }


        $gambar = gambar::find($request->id);
        $gambar->judul_gambar = $request->judul_gambar;
        $gambar->nama_gambar = $lampiran;
        $gambar->kategori_gambar = $kategori;
        $gambar->tag_gambar = $tag;
        $gambar->created_by = $request->created_by;
        $gambar->updated_by = $request->updated_by;
        $gambar->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.gambar.index');
    }

    public function show(gambar $gambar)
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.gambar.show', compact('gambar', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }

        $data = gambar::findOrFail($id);

        $gambar = gambar::where('id',$id)->first();
        $gambar = $gambar->nama_gambar;
        File::delete(public_path('upload/gambar/').$gambar);

        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.gambar.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('gambar_manage')) {
            return abort(401);
        }
        gambar::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
