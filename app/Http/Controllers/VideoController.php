<?php

namespace App\Http\Controllers;

use App\Video;
use App\pegawai;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }

        $video = Video::all();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.video.index', compact(['video', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.video.create', compact(['pengguna']));
        // return view('admin.video.create', compact(['tagall', 'pengguna', 'tag']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }

        $this->validate($request, [
        	'judul_video' => 'required',
            'link_video' => 'required',
            'tgl_publikasi' => 'required',
            'status' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        video::create([
            'judul_video' => $request->judul_video,
            'link_video' => $request->link_video,
            'tgl_publikasi' => $request->tgl_publikasi,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_video);

        return redirect()->route('admin.video.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.video.edit', compact('video', 'pengguna'));
        // return view('admin.video.edit', compact('video', 'pengguna', 'tag', 'tagall'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }
        $this->validate($request, [
        	'judul_video' => 'required',
            'link_video' => 'required',
            'tgl_publikasi' => 'required',
            'status' => 'required',
            'updated_by' => 'required',
        ]);
        

        $video = Video::find($request->id);
        $video->judul_video = $request->judul_video;
        $video->link_video = $request->link_video;
        $video->tgl_publikasi = $request->tgl_publikasi;
        $video->status = $request->status;
        $video->updated_by = $request->updated_by;
        $video->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.video.index');
    }

    public function show(Video $video)
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.video.show', compact('video', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('video_manage')) {
            return abort(401);
        }

        $data = Video::findOrFail($id);

        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.video.index');
    }

}
