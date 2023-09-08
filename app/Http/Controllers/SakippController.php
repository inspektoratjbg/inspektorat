<?php

namespace App\Http\Controllers;

use App\Pesan;
use App\Sakip;
use App\Perjanjian;
use App\pegawai;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class SakippController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        // $sakip = Sakip::where('nip_pihak_pertama', '003')->first();
        $sakipp = Sakip::where('nip_pihak_kedua', $pengguna->nip)
                    ->orderBy('id', 'desc')
                    ->get()
                    ->toArray();

        return view('admin.sakipp.index', compact(['sakipp', 'pengguna']));
    }

    public function dash($tahun)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        $pegawai = pegawai::all()->toArray();
        $sakip = Sakip::all();
        $hasil = array();
        for ($i=0; $i < count($pegawai) ; $i++) {
            $stack = array();
            array_push($stack, $pegawai[$i]['nip'], $pegawai[$i]['nama_pegawai'], '0', '0', '0', '0','-');
            array_push($hasil, $stack);
        }

        for ($i=0; $i < count($pegawai) ; $i++) {
            for ($j=0; $j < count($sakip) ; $j++) {
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun ) {
                    $hasil[$i][2]="1";
                    $hasil[$i][3]="1";
                    $hasil[$i][4]="1";
                    $hasil[$i][5]="1";
                    $hasil[$i][6]=$sakip[$j]['nama_pihak_kedua'];
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status1']=='1') {
                    $hasil[$i][2]="2";
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status2']=='1') {
                    $hasil[$i][3]="2";
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status3']=='1') {
                    $hasil[$i][4]="2";
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status4']=='1') {
                    $hasil[$i][5]="2";
                }
                // $hasil[$i][0]=$sakip[$j]['nama_pihak_kedua'];
            }
        }

        return view('admin.sakipp.dash', compact(['pengguna', 'hasil', 'tahun']));
    }

    public function dashh(Request $request)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }
        $tahun = $request->status;
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        $pegawai = pegawai::all()->toArray();
        $sakip = Sakip::all();
        $hasil = array();
        for ($i=0; $i < count($pegawai) ; $i++) {
            $stack = array();
            array_push($stack, $pegawai[$i]['nip'], $pegawai[$i]['nama_pegawai'], '0', '0', '0', '0','-');
            array_push($hasil, $stack);
        }

        for ($i=0; $i < count($pegawai) ; $i++) {
            for ($j=0; $j < count($sakip) ; $j++) {
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun ) {
                    $hasil[$i][2]="1";
                    $hasil[$i][3]="1";
                    $hasil[$i][4]="1";
                    $hasil[$i][5]="1";
                    $hasil[$i][6]=$sakip[$j]['nama_pihak_kedua'];
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status1']=='1') {
                    $hasil[$i][2]="2";
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status2']=='1') {
                    $hasil[$i][3]="2";
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status3']=='1') {
                    $hasil[$i][4]="2";
                }
                if ($hasil[$i][0]==$sakip[$j]['nip_pihak_pertama'] and $sakip[$j]['tahun']==$tahun and $sakip[$j]['status4']=='1') {
                    $hasil[$i][5]="2";
                }
                // $hasil[$i][0]=$sakip[$j]['nama_pihak_kedua'];
            }
        }

        return view('admin.sakipp.dash', compact(['pengguna', 'hasil', 'tahun']));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.create', compact(['pengguna']));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }
        $this->validate($request, [
            'nama_sakipp' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        sakipp::create([
            'nama_sakipp' => $request->nama_sakipp,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        Alert::success('Berhasil Di Tambahkan', $request->judul_sakipp);

        return redirect()->route('admin.sakipp.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sakip $sakipp)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.edit', compact('sakipp', 'pengguna'));
    }

    public function verif1($id)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $sakipp = Sakip::where('id', $id)->first();
        $tipe_sakip=1;

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.edit', compact('tipe_sakip', 'sakipp', 'pengguna'));
    }

    public function verif2($id)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $sakipp = Sakip::where('id', $id)->first();
        $tipe_sakip=2;

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.edit', compact('tipe_sakip', 'sakipp', 'pengguna'));
    }

    public function verif3($id)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $sakipp = Sakip::where('id', $id)->first();
        $tipe_sakip=3;

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.edit', compact('tipe_sakip', 'sakipp', 'pengguna'));
    }

    public function verif4($id)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $sakipp = Sakip::where('id', $id)->first();
        $tipe_sakip=4;

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.edit', compact('tipe_sakip', 'sakipp', 'pengguna'));
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
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $sakipp = Sakip::where('id', $request->id)->first();

        $sakipp = Sakip::find($request->id);
        if ($request->tipe_sakip==1) {
            $sakipp->status1 = $request->status1;
        } elseif($request->tipe_sakip==2) {
            $sakipp->status2 = $request->status2;
        } elseif($request->tipe_sakip==3) {
            $sakipp->status3 = $request->status3;
        }else {
            $sakipp->status4 = $request->status4;
        }
        $sakipp->save();

        if ($request->isi_pesan!=null) {
            Pesan::create([
                'id_sakip' => $sakipp->id,
                'isi_pesan' => $request->isi_pesan,
                'penerima_pesan' => $sakipp->nip_pihak_kedua,
                'pemberi_pesan' => $sakipp->nip_pihak_pertama,
                'peran_pesan' => 'Pesan ke Pihak Pertama',
                'tipe_pesan' => $request->tipe_sakip,
                'created_by' => $request->created_by,
          ]);
        }


        toast('Ubah data berhasil','success');

        return redirect()->route('admin.sakipp.index');
    }


    public function show(Sakip $sakipp)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        return view('admin.sakipp.show', compact('sakipp', 'pengguna'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('atasan_sakip_manage')) {
            return abort(401);
        }

        $data = sakipp::findOrFail($id);

        $data->delete();

        Alert::success('Berhasil', 'Di Hapus');

        return redirect()->route('admin.sakipp.index');
    }

    // public function printperjanjian($id)
    // {
    //     //GET DATA BERDASARKAN ID
    //     $sakip = Sakip::where('id', $id)->first();
    //     $perjanjian = Perjanjian::where('id_sakip', $id)
    //                 ->orderBy('urutan_per_tahun', 'asc')
    //                 ->get()
    //                 ->toArray();
    //     $pengguna = Auth::getUser();
    //     $pengguna = pegawai::where('nip', $pengguna['name'])->first();
    //     // die();
    //     //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //     //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    //     $pdf = PDF::loadView('admin.perjanjian.print', compact(['sakip', 'perjanjian', 'pengguna']))->setPaper('a4', 'potrait');
    //     return $pdf->stream();
    // }
    // public function printpengkuran($id)
    // {
    //     //GET DATA BERDASARKAN ID
    //     $sakip = Sakip::where('id', $id)->first();
    //     $perjanjian = Perjanjian::where('id_sakip', $id)
    //                 ->orderBy('urutan_per_tahun', 'asc')
    //                 ->get()
    //                 ->toArray();
    //     $pengguna = Auth::getUser();
    //     $pengguna = pegawai::where('nip', $pengguna['name'])->first();
    //     // die();
    //     //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //     //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    //     $pdf = PDF::loadView('admin.pengukuran.print', compact(['sakip', 'perjanjian', 'pengguna']))->setPaper('letter', 'landscape');
    //     return $pdf->stream();
    // }
}
