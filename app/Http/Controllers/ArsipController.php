<?php

namespace App\Http\Controllers;

use App\arsip;
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


class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }

        $arsip = arsip::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.arsip.index', compact(['arsip', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }
        $tag = tag_berita::distinct()->get(['kategori_tag']);
        // MyModel::distinct()->get(['column_name']);
        $tagall = tag_berita::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();


        return view('admin.arsip.create', compact(['tagall', 'pengguna', 'tag']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }

        $tag = json_encode($request->tag_arsip);
        $kategori = json_encode($request->kategori_arsip);
        $this->validate($request, [
            'judul_arsip' => 'required',
            'nama_arsip' => 'required',
            'kategori_arsip' => 'required',
            'tag_arsip' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);



        if($request->hasfile('nama_arsip'))
         {
            $name=date("Y-m-d").'-'.Str::slug($request->judul_arsip).'.'.$request->file('nama_arsip')->getClientOriginalExtension();
            $request->file('nama_arsip')->move(public_path('upload/arsip'), $name);

            $lampiran = $name;
         }

        arsip::create([
            'judul_arsip' => $request->judul_arsip,
            'nama_arsip' => $lampiran,
            'kategori_arsip' => $kategori,
            'tag_arsip' => $tag,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);
        Alert::success('Berhasil Di Tambahkan', $request->judul_arsip);
        // toast('Success Toast','success');

        return redirect()->route('admin.arsip.create');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(arsip $arsip)
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }

        $tag = tag_berita::distinct()->get(['kategori_tag']);
        // MyModel::distinct()->get(['column_name']);
        $tagall = tag_berita::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.arsip.edit', compact('arsip', 'pengguna', 'tag', 'tagall'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, arsip $arsip)
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }
        $this->validate($request, [
        	  'judul_arsip' => 'required',
            'kategori_arsip' => 'required',
            'tag_arsip' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);
        // $wkwk = arsip::where('no_arsip',$request->no_arsip)->first();
        // echo print_r($wkwk->lampiran);
        echo $request->id;

        $gambar = arsip::where('id',$request->id)->first();
        $gambar = $gambar->nama_arsip;
        $tag = json_encode($request->tag_arsip);
        $kategori = json_encode($request->kategori_arsip);
        $lampiran = $gambar;

        if ($request->file('nama_arsip')!=null) {

            File::delete(public_path('upload/arsip/').$gambar);


            if($request->hasfile('nama_arsip'))
             {

                $name=date("Y-m-d").'-'.Str::slug($request->judul_arsip).'.'.$request->file('nama_arsip')->getClientOriginalExtension();
                $request->file('nama_arsip')->move(public_path('upload/arsip'), $name);

                $lampiran = $name;
             }
        }

        $Arsip = arsip::find($request->id);
        $Arsip->judul_arsip = $request->judul_arsip;
        $Arsip->nama_arsip = $lampiran;
        $Arsip->kategori_arsip = $kategori;
        $Arsip->tag_arsip = $tag;
        $Arsip->created_by = $request->created_by;
        $Arsip->updated_by = $request->updated_by;
        $Arsip->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.arsip.index');
    }

    public function show(arsip $arsip)
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.arsip.show', compact('arsip', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }

        $data = arsip::findOrFail($id);

        $gambar = arsip::where('id',$id)->first();
        $gambar = $gambar->nama_arsip;

        File::delete(public_path('upload/arsip/').$gambar);


        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.arsip.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        echo 'succes';
        die();
        if (! Gate::allows('arsip_manage')) {
            return abort(401);
        }
        arsip::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
