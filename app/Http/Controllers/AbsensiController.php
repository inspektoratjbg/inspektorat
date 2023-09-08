<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\pegawai;
use File;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        
        $absensi = DB::table('tb_absensi')
                ->where('tanggal', date('Y-m-d'))
                ->select('tb_absensi.*')
                ->orderBy('tanggal', 'ASC')
                ->get();
        return view('admin.absensi.index', compact(['absensi', 'pengguna']));
    }

    public function total()
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        $absensi = DB::table('tb_absensi')
                ->select('tb_absensi.*')
                ->orderBy('tanggal', 'ASC')
                ->get();
        return view('admin.absensi.index', compact(['absensi', 'pengguna']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.absensi.create', compact(['pengguna']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'nip_atasan' => 'required',
            'jam' => 'required',
            'lampiran' => 'required',
            'created_by' => 'required',
        ]);

        $keterangan="-";
        if($request->keterangan!=null){
            $keterangan=$request->keterangan;
        }

        $file = $request->file('lampiran');
        $data = [];
        if ($request->file('lampiran')!=null) {
            if($request->hasfile('lampiran'))
            {
                $name=date("Y-m-d").'-'.Str::slug($request->nip).'-'.date("h-i-sa").$file->getClientOriginalName();
                // echo $request->created_by;
                // die();
                $file->move(public_path('upload/absensi'), $name);
                // echo $request->created_by;
                // die();
                Absensi::create([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'nip_atasan' => $request->nip_atasan,
                    'tanggal' => $request->tanggal,
                    'jam' => $request->jam,
                    'keterangan' => $keterangan,
                    'lampiran' => $name,
                    'created_by' => $request->created_by,
                    'updated_by' => "",
                ]);
                Alert::success('Berhasil Di Tambahkan', $request->nama);
                return redirect()->route('admin.absensi.index');

            }
            $file=json_encode($data);
        }

        echo "tidak berhasil";
        die();
        Alert::warning('Tidak Berhasil Di Tambahkan', $request->nama);
        return redirect()->route('admin.absensi.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.absensi.edit', compact('absensi', 'pengguna'));
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
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }

        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'nip_atasan' => 'required',
            'jam' => 'required',
            'updated_by' => 'required',
        ]);

        $lampiran = Absensi::where('id',$request->id)->first();
        $idd = $lampiran->id;
        $file= $lampiran->lampiran;

        if ($request->file('lampiran')!=null) {
          // die();
            File::delete(public_path('upload/absensi/').$file);

            if($request->hasfile('lampiran'))
            {
                $file = $request->file('lampiran');
                $name=date("Y-m-d").'-'.Str::slug($request->nip).'-'.date("h-i-sa").$file->getClientOriginalName();
                $file->move(public_path('upload/absensi'), $name);
                $file = $name;

            }
        }

        try {
            $absensi = Absensi::find($idd);
            $absensi->nip = $request->nip;
            $absensi->nama = $request->nama;
            $absensi->nip_atasan = $request->nip_atasan;
            $absensi->tanggal = $request->tanggal;
            $absensi->jam = $request->jam;
            $absensi->keterangan = $request->keterangan;
            $absensi->lampiran = $file;
            $absensi->updated_by = $request->updated_by;
            $absensi->save();

            Alert::success('Berhasil Di Ubah', $request->nama);
            return redirect()->route('admin.absensi.index');

        } catch (\Exception $e) {
            die();
            Alert::success('Tidak Berhasil Di Ubah', $request->nama);
            return redirect()->route('admin.absensi.index');
        }
    }

    public function show(Absensi $absensi)
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.absensi.show', compact('absensi', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('absensi_manage')) {
            return abort(401);
        }


        $data = Absensi::findOrFail($id);

        $absensi = Absensi::where('id',$id)->first();

        if ($absensi!=null) {
            File::delete(public_path('upload/absensi/').$absensi->lampiran);
        }

        $data->delete();

        Alert::warning('Berhasil Di Hapus', $absensi->nama);
        return redirect()->route('admin.absensi.index');
    }
}
