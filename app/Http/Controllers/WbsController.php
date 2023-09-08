<?php

namespace App\Http\Controllers;

use App\Wbs;
use App\WbsOffln;
use App\pegawai;
use App\Pelapor;
use App\Terlapor;
use App\DocWbs;
use App\WbsAudit;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use DataTables;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator; 
class WbsController extends Controller
{
  public function index(Request $request)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }

      $wbs = Wbs::all();
        if ($request->ajax()) {
            $data = WbsOffln::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = "<div class='btn-group'>";
                    // $btn .= '<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>';
                    $btn .= '<a href="' . url('admin/wbs2/Detail_Pengaduan_Masyarkat', $row->id) . '"title="View" class=" btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>';
                    $btn .= '<a href="' . url('admin/wbs2/Form_Pengaduan_Masyarkat', $row->id) . '"target="_blank" title="Form Pengaduan" class=" btn btn-primary btn-sm"><i class="fas fa-file"></i></a>';
                    $btn .= '<a href="' . route('admin.wbs.edit', $row->id) . '" data-id="'.$row->id.'"title="Edit" class=" btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>';
                    $btn .= '<a href="javascript:void(0)" data-id="'.$row->id.'"title="Hapus" class=" Del_wbs btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    $btn .= "</div>";
                    return $btn;
                })
                ->addColumn('iden_pelapor', function($row){
                    $cek = Pelapor::select('id','foto_tnd_pngenal', 'noregis_id', 'nama_pelapor')->where('noregis_id', $row->no_regis)->get();
                    $html = null;
                            foreach ($cek as $a) {
                                if (empty($a->foto_tnd_pngenal)) {
                                    $html .= '- '.$a->nama_pelapor.'<br>';
                                } else{
                                    // $html .= '- <a href="javascript:void(0)" class="view_iden" id="'.$a->id.'" >'.$a->nama_pelapor.'</a>';
                                    $html .= '- '.$a->nama_pelapor.' <a target="_blank" href="' . asset('upload/wbs/ktp/'. $a->foto_tnd_pngenal) . '" > <span class="badge badge primary">Foto</span></a><br>';
                                    // $html .= '- '.$a->nama_pelapor.' <br>';
                                }
                            }
                    return $html;
                })
                ->addColumn('doc_pendukung', function($row){
                    $cek = DocWbs::select('id', 'noregis_id', 'jns_dokumen')->where('noregis_id', $row->no_regis)->get();
                    $html = null;
                            foreach ($cek as $a) {
                                if (empty($a->jns_dokumen)) {
                                } else {
                                    $html .= '- <a target="_blank" href="' . asset('upload/wbs/bukti/'. $a->jns_dokumen) . '" ><span >'.$a->jns_dokumen.'</span></a>';
                                     // $html .= '- '.$a->jns_dokumen.'<br>';
                                }
                            }
                    return $html;
                })
                ->addColumn('media_penyimpan', function($row){
                    $btn = "<div class='btn-group'>";
                    if ($row->media_penyimpan == 'Langsung') {
                        $btn .= '<span class="badge badge-pill badge-primary">'.$row->media_penyimpan.'</span>';
                    } elseif ($row->media_penyimpan == 'Tidak Langsung') {
                        $btn .= '<span class="badge badge-pill badge-warning">'.$row->media_penyimpan.'</span>';
                    } elseif ($row->media_penyimpan == 'Website') {
                        $btn .= '<span class="badge badge-pill badge-dark">'.$row->media_penyimpan.'</span>';
                        // $btn .= '<a href="javascript:void(0)" class="lihat_token" id="'.$row->token.'" >Lihat Token</a>';
                    } else {
                        $btn .= '<span class="badge badge-pill badge-secondary">'.$row->media_penyimpan.'</span>';
                    }
                    $btn .= "</div>";
                    return $btn;
                })
                ->addColumn('status', function($row){
                    $btn = "<div class='btn-group'>";
                    if ($row->status == 'Belum Ditindaklanjuti') {
                        $btn .= '<a href="javascript:void(0)" class="edit_status" id="'.$row->id.'" ><span class="badge badge-danger">'.$row->status.'</span> </a>';
                    } elseif ($row->status == 'Ditindaklanjuti') {
                        $btn .= '<a href="javascript:void(0)" class="edit_status" id="'.$row->id.'" ><span class="badge badge-success">'.$row->status.'</span> </a>';
                    }
                    $btn .= "</div>";
                    return $btn;
                })
                ->rawColumns(['action', 'iden_pelapor', 'doc_pendukung', 'media_penyimpan','status'])
                ->make(true);
        }
      $pengguna = Auth::getUser();
      $pengguna = Pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.wbs.index', compact(['wbs', 'pengguna']));
  }

//   public function form_aduan()
//   {
//     return view('admin.wbs.form_aduan');
//   }
  public function cek_pelapor()
  {
     
      $pelapor = Pelapor::all();
    //   return view('admin.wbs.add_adm', compact('wbs', 'pengguna'));
  }
  public function add(Request $request)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }
      $IdGenerate = IdGenerator::generate(['table' => 'tb_web_wbs_offln', 'field' => 'no_regis', 'length' => 7, 'prefix' => 'RGS']);
        // TOKEN COBA
            //   function generateRandomString($length = 10) {
            //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            //     $charactersLength = strlen($characters);
            //     $randomString = '';
            //     for ($i = 0; $i < $length; $i++) {
            //         $randomString .= $characters[rand(0, $charactersLength - 1)];
            //     }
            //     return $randomString;
            // }
            // $IdGenerate = 'LGS'.generateRandomString();

      $pgw = Pegawai::orderBy('divisi_pegawai', 'ASC')->get();
      if ($request->ajax()) {
        $data = Pelapor::select('id','noregis_id','nama_pelapor','foto_tnd_pngenal','tanda_pengenal', 'no_tnd_pengenal')->where('noregis_id', $IdGenerate)->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('foto_tnd_pngenal', function($row){
                $btn = '<a target="_blank" href="' . asset('upload/wbs/ktp/'. $row->foto_tnd_pngenal) . '" >'.$row->foto_tnd_pngenal.'</a>';
                return $btn;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDelete btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            
            ->rawColumns(['foto_tnd_pngenal','action'])
            ->make(true);
     }
    //   $wbs = Wbs::where('id', $a)->first();
      $pengguna = Auth::getUser();
      $pengguna = Pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.wbs.add_adm', compact('pengguna','IdGenerate', 'pgw'));
    //   return view('admin.wbs.add_adm', compact('wbs', 'pengguna'));
  }
  public function json_docwbs(Request $request, $id){
    $IdGenerate = IdGenerator::generate(['table' => 'tb_web_wbs_offln', 'field' => 'no_regis', 'length' => 7, 'prefix' => 'RGS']);
    if ($request->ajax()) {
        $data = DocWbs::select('id','noregis_id','jns_dokumen','jumlah','ket')->where('noregis_id', $IdGenerate)->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('doc_wbs', function($row){
                $btn = '<a target="_blank" href="' . asset('upload/wbs/bukti/'. $row->jns_dokumen) . '" >'.$row->jns_dokumen.'</a>';
                return $btn;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDeleteDoc btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['doc_wbs','action'])
            ->make(true);
    }
  }
  public function store_pelapor(Request $request)
  {
    if ($request->hasFile('foto_tnd_pengenal')) {
        $nm = $request->foto_tnd_pengenal;
        $filename = time().rand(100,999)."_".$nm->getClientOriginalName();
        $docwbs = new Pelapor;
        $docwbs->noregis_id = $request->no_regis;
        $docwbs->nama_pelapor = $request->nama_pelapor;
        $docwbs->foto_tnd_pngenal = $filename;
        $docwbs->tanda_pengenal = $request->tanda_pengenal;
        $docwbs->no_tnd_pengenal = $request->no_tnd_pengenal;
        $docwbs->created_at =now();
        $nm->move(public_path().'/upload/wbs/ktp', $filename);
        $docwbs->save();
     }
    // DB::table('temp_pelapor')->insert([
    //     'noregis_id' => $request->no_regis,
    //     'nama_pelapor' => $request->nama_pelapor,
    //     'tanda_pengenal' => $request->tanda_pengenal,
    //     'no_tnd_pengenal' => $request->no_tnd_pengenal,
    //     'created_at' => now()
    // ]);
    return response()->json(['success'=>'Record saved successfully.']);
  }
  public function store_docwbs(Request $request)
  {
        if ($request->hasFile('jns_doc')) {
            $nm = $request->jns_doc;
            $filename = time().rand(100,999)."_".$nm->getClientOriginalName();
            $docwbs = new DocWbs;
            $docwbs->noregis_id = $request->no_regis;
            $docwbs->jns_dokumen = $filename;
            $docwbs->created_at =now();
            $nm->move(public_path().'/upload/wbs/bukti', $filename);
            $docwbs->save();
         }
    // DB::table('temp_dokumen')->insert([
    //         'noregis_id' => $request->no_regis,
    //         'jns_dokumen' => $filename,
    //         'created_at' => now()
    //     ]);
    return response()->json(['success'=>'Record saved successfully.']);
  }
  public function json_terlapor_wbs(Request $request, $id)
  {
    
    $IdGenerate = IdGenerator::generate(['table' => 'tb_web_wbs_offln', 'field' => 'no_regis', 'length' => 7, 'prefix' => 'RGS']);
    if ($request->ajax()) {
      $data = Terlapor::select('id','noregis_id','nama_terlapor','nik', 'alamat', 'jabatan', 'instansi')->where('noregis_id', $IdGenerate)->get();
      return Datatables::of($data)->addIndexColumn()
          ->addColumn('action', function($row){
              $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDel_trlpor btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
              return $btn;
          })
          
          ->rawColumns(['action'])
          ->make(true);
   }

  }
  public function json_TmAuditor_wbs(Request $request, $id)
  {
    
    if ($request->ajax()) {
    //   $data = WbsAudit::select('id','noregis_id','nama_auditor')->where('noregis_id', $id)->get();
      $data = DB::table('tb_wbs_audit')
                ->select('tb_wbs_audit.*', 'pg.nama_pegawai')
                ->join('tb_pegawai as pg', 'tb_wbs_audit.nama_auditor', '=', 'pg.nip')
                ->where('tb_wbs_audit.noregis_id', $id)
                ->get();
      return Datatables::of($data)->addIndexColumn()
          ->addColumn('action', function($row){
              $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDel_TmAuditor btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
              return $btn;
          })
          
          ->rawColumns(['action'])
          ->make(true);
   }

  }
  public function store_terlpor(Request $request)
  {
    DB::table('temp_terlapor')->insert([
            'noregis_id' => $request->no_regis,
            'nama_terlapor' => $request->nama_trlpor,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'instansi' => $request->instansi,
            'created_at' => now()
        ]);
    return response()->json(['success'=>'Record saved successfully.']);
  }
  public function store_TmAuditor(Request $request)
  {
    DB::table('tb_wbs_audit')->insert([
            'noregis_id' => $request->no_regis,
            'nama_auditor' => $request->nama_auditor,
            'peran_auditor' => $request->peran_auditor,
            'created_at' => now()
        ]);
    return response()->json(['success'=>'Record saved successfully.']);
  }
  public function create()
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }

      $pengguna = Auth::getUser();
      $pengguna = Pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.wbs.create', compact(['pengguna']));
  }

  public function store(Request $request)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }

      Alert::success('Berhasil Di Tambahkan', $request->judul_wbs);

      return redirect()->route('admin.wbs.index');
  }
  public function store_wbs_offln(Request $request)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }
      $wbs_offln = new WbsOffln;
            $wbs_offln->no_regis = $request->no_regis;
            $wbs_offln->no_laporan = $request->no_lap;
            $wbs_offln->tgl_lapor = $request->tgl_lapor;
            $wbs_offln->tgl_terima_lpr = $request->tgl_terima;
            $wbs_offln->perihal = $request->perihal;
            $wbs_offln->isi_aduan = $request->isi_aduan;
            $wbs_offln->pendftrn_aduan = $request->pendftrn_aduan;
            $wbs_offln->jns_pelapor = $request->jns_pelapor;
            if ($request->jns_pelapor_lain) {
                $wbs_offln->jns_pelapor = $request->jns_pelapor_lain;
            }
            $wbs_offln->jns_potensi = $request->jns_potensi;
            $wbs_offln->lok_kejadian = $request->lok_kejadian;
            $wbs_offln->wkt_kejadian = $request->wkt_kejadian;
            $wbs_offln->ctt_petugas = $request->ctt_petugas;
            $wbs_offln->media_penyimpan = $request->media_penyimpan;
            $wbs_offln->status = 'Belum Ditindaklanjuti';
            $wbs_offln->created_at =now();
            $wbs_offln->save();

        // DB::table('tb_web_wbs_offln')->insert([
        //     'no_regis' => $request->no_regis,
        //     'no_laporan' => $request->no_lap,
        //     'tgl_lapor' => $request->tgl_lapor,
        //     'tgl_terima_lpr' => $request->tgl_terima,
        //     'perihal' => $request->perihal,
        //     'isi_aduan' => $request->isi_aduan,
        //     'pendftrn_aduan' => $request->pendftrn_aduan,
        //     'jns_pelapor' => $request->jns_pelapor,
        //     'lok_kejadian' => $request->lok_kejadian,
        //     'wkt_kejadian' => $request->wkt_kejadian,
        //     'ctt_petugas' => $request->ctt_petugas,
        //     'media_penyimpan' => $request->media_penyimpan,
        //     'status' => 'Belum Ditindaklanjuti',
        //     'created_at' => now()
        // ]);
      Alert::success('Wbs Berhasil Di Tambahkan ');

      return redirect()->route('admin.wbs.index');
  }


  /**
   * Show the form for editing User.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Wbs $wbs,Request $request, $x)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }

    //   LAMA
        // echo $wbs;
        // $wbs = Wbs::where('id', $x)->first();
        // // die();
        // $pengguna = Auth::getUser();
        // $pengguna = pegawai::where('nip', $pengguna['name'])->first();

        // return view('admin.wbs.edit', compact('wbs', 'pengguna'));
    // BARU
        $idwbs = $x;
        $wbs = WbsOffln::where('id', $x)->first();
        // $pelapor = Pelapor::where('noregis_id', $wbs->no_regis)->get();
        // $docwbs = DocWbs::where('noregis_id', $wbs->no_regis)->get();
        $pgw = Pegawai::orderBy('divisi_pegawai', 'ASC')->get();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        if ($request->ajax()) {
            $data = Pelapor::select('id','noregis_id','foto_tnd_pngenal','nama_pelapor','tanda_pengenal', 'no_tnd_pengenal')->where('noregis_id', $wbs->no_regis)->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDelete_ed btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->addColumn('foto_tnd_pngenal', function($row){
                    $btn = '<a href="' . asset('upload/wbs/ktp/'. $row->foto_tnd_pngenal) . '" target="_blank">'.$row->foto_tnd_pngenal.' </a>';
                    return $btn;
                })
                
                ->rawColumns(['action', 'foto_tnd_pngenal'])
                ->make(true);
        }

        return view('admin.wbs.edit2', compact('wbs', 'pengguna', 'pgw','idwbs'));
  }
  public function view(Wbs $wbs,Request $request, $x)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }
        $idwbs = $x;
        $wbs = WbsOffln::where('id', $x)->first();
        $pelapor = Pelapor::where('noregis_id', $wbs->no_regis)->get();
        $docwbs = DocWbs::where('noregis_id', $wbs->no_regis)->get();
        $terlapor = Terlapor::where('noregis_id', $wbs->no_regis)->get();
        $tim_audit = WbsAudit::where('noregis_id', $wbs->no_regis)->get();
        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        return view('admin.wbs.view', compact('wbs', 'pengguna','pelapor', 'docwbs','terlapor', 'idwbs','tim_audit'));
  }
  public function form_pengaduan(Wbs $wbs,Request $request, $x)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }
        $idwbs = $x;
        $wbs = WbsOffln::where('id', $x)->first();
        $pelapor = Pelapor::where('noregis_id', $wbs->no_regis)->get();
        $docwbs = DocWbs::where('noregis_id', $wbs->no_regis)->get();
        $terlapor = Terlapor::where('noregis_id', $wbs->no_regis)->get();
        // $timaudit = WbsAudit::where('noregis_id', $wbs->no_regis)->get();
        $timaudit = DB::table('tb_wbs_audit')
        ->select('tb_wbs_audit.*', 'pg.nama_pegawai')
        ->join('tb_pegawai as pg', 'tb_wbs_audit.nama_auditor', '=', 'pg.nip')
        ->where('tb_wbs_audit.noregis_id', $wbs->no_regis)
        ->get();

        $pengguna = Auth::getUser();
        $pengguna = pegawai::where('nip', $pengguna['name'])->first();
        return view('admin.wbs.form_aduan', compact('wbs', 'pengguna','timaudit','pelapor', 'docwbs','terlapor', 'idwbs'));
  }
  public function rekap_wbs(Request $request)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }
      $wbs = WbsOffln::all();
      $tgl_sekarang = now();
      $inspektur = Pegawai::where('divisi_pegawai', '1')->first();
        if ($request->ajax()) {
            $data = WbsOffln::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('iden_pelapor', function($row){
                    $cek = Pelapor::select('id','foto_tnd_pngenal', 'noregis_id', 'nama_pelapor')->where('noregis_id', $row->no_regis)->get();
                    $html = null;
                        foreach ($cek as $a) {
                            $html .= '- '.$a->nama_pelapor.'<br>';
                        }
                    return $html;
                })
                ->rawColumns(['iden_pelapor'])
                ->make(true);
        }
    $pengguna = Auth::getUser();
    $pengguna = Pegawai::where('nip', $pengguna['name'])->first();
        return view('admin.wbs.rekap', compact('wbs','tgl_sekarang','inspektur'));
  }
  public function json_docwbs_ed(Request $request, $id){
    // $IdGenerate = IdGenerator::generate(['table' => 'tb_web_wbs_offln', 'field' => 'no_regis', 'length' => 7, 'prefix' => 'RGS']);
    if ($request->ajax()) {
        $data = DocWbs::select('id','noregis_id','jns_dokumen','jumlah','ket')->where('noregis_id', $id)->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('jenis_file', function($row){
                $btn = '<a href="' . asset('upload/wbs/bukti/'. $row->jns_dokumen) . '" target="_blank">'.$row->jns_dokumen.' </a>';
                return $btn;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDeleteDoc_ed btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action','jenis_file'])
            ->make(true);
    }
  }
  public function trlpor_wbs_ed(Request $request, $id){
    // $IdGenerate = IdGenerator::generate(['table' => 'tb_web_wbs_offln', 'field' => 'no_regis', 'length' => 7, 'prefix' => 'RGS']);
    if ($request->ajax()) {
        $data = Terlapor::select('id','noregis_id','nama_terlapor','nik', 'alamat', 'jabatan', 'instansi')->where('noregis_id', $id)->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="BtnDelTrlpor_ed btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
  }

  /**
   * Update User in storage.
   *
   * @param  \App\Http\Requests\UpdateUsersRequest  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Wbs $wbs)
  {
        if (! Gate::allows('wbs_manage')) {
            return abort(401);
        }

        // $this->validate($request, [
        //     'lampiran_feedback' => 'file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
        //     'catatan_feedback' => 'required',
        //     'status' => 'required',
        //     'publikasi' => 'required',
        // ]);
        // die();
        if ($request->file('lampiran_feedback')!=null) {

            File::delete('upload/feedback/'.$request->lampiran_feedback);


            if($request->hasfile('lampiran_feedback'))
            {

                $name=date("Y-m-d").'-'.Str::slug($request->nama_pelapor).'-'.date("h-i-sa").'.'.$request->file('lampiran_feedback')->getClientOriginalExtension();
                $request->file('lampiran_feedback')->move('upload/wbs/feedback', $name);

                $lampiran = $name;
            }
        }

        $wbs = Wbs::find($request->id);
        $wbs->catatan_feedback = $request->catatan_feedback;
        $wbs->publikasi = $request->publikasi;
        $wbs->status = $request->status;
        $wbs->lampiran_feedback = $lampiran;
        $wbs->save();

        toast('Ubah data berhasil','success');

        return redirect()->route('admin.wbs.index');
  }
  public function edit_status(Request $request)
  {
        $id = $request->post('id');
        $jenis = $request->post('jenis');
        if(request()->ajax()){
            $data = WbsOffln::findOrFail($id);
            return response()->json(['result'=> $data]);
        }
        // return redirect()->route('admin.wbs.index');
    }
  public function update_status(Request $request)
  {
        $id = $request->post('id');
        $jenis = $request->post('jenis');
        // if ($request->jenis == 'Update Status') {
            DB::table('tb_web_wbs_offln')->where('id',$request->id)
            ->update([
                'status' => $request->status,
                'updated_at' =>  now()
            ]);
            // $wbs = WbsOffln::find($request->id);
            // $wbs->status = $request->status;
            // $wbs->updated_at = now();
        // }
        return response()->json(['success'=>'Record saved successfully.']);
        // return redirect()->route('admin.wbs.index');
    }

  public function progress(Request $request, Wbs $wbs)
  {
        if (! Gate::allows('wbs_manage')) {
            return abort(401);
        }
    //Koding Lama
        // $this->validate($request, [
        //     'lampiran_feedback' => 'file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
        //     'catatan_feedback' => 'required',
        //     'status' => 'required',
        //     'publikasi' => 'required',
        // ]);
        // if ($request->file('lampiran_feedback')!=null) {

        //     File::delete('upload/feedback/'.$request->lampiran_feedback);


        //     if($request->hasfile('lampiran_feedback'))
        //     {

        //         $name=date("Y-m-d").'-'.Str::slug($request->nama_pelapor).'-'.date("h-i-sa").'.'.$request->file('lampiran_feedback')->getClientOriginalExtension();
        //         $request->file('lampiran_feedback')->move('upload/wbs/feedback', $name);

        //         $lampiran = $name;
        //     }
        // }



        // echo 'sadasd';
        // die();
        // echo $request->catatan_feedback;
        // echo $request->publikasi;
        // echo $request->id;
        // // echo $lampiran;

        // // $flight = App\Flight::find(1);

        // // $flight->name = 'New Flight Name';

        // // $flight->save();

        // die();

        // $wbs = Wbs::find($request->id);
        // $wbs->catatan_feedback = $request->catatan_feedback;
        // $wbs->publikasi = $request->publikasi;
        // $wbs->status = $request->status;
        // $wbs->lampiran_feedback = $lampiran;
        // $wbs->save();
    //Koding Baru
        $wbs = WbsOffln::find($request->id_wbs);
        $wbs->media_penyimpan = $request->media_penyimpan;
        $wbs->no_laporan = $request->no_lap;
        $wbs->tgl_lapor = $request->tgl_lapor;
        $wbs->tgl_terima_lpr = $request->tgl_terima;
        $wbs->perihal = $request->perihal;
        $wbs->isi_aduan = $request->isi_aduan;
        $wbs->pendftrn_aduan = $request->pendftrn_aduan;
        $wbs->jns_pelapor = $request->jns_pelapor;
        $wbs->jns_potensi = $request->jns_potensi;
        $wbs->lok_kejadian = $request->wkt_mulai;
        $wbs->wkt_kejadian = $request->wkt_selsai;
        $wbs->ctt_petugas = $request->ctt_petugas;
        $wbs->save();
        toast('Ubah data berhasil','success');

        return redirect()->route('admin.wbs.index');
  }

  public function show(Wbs $wbs, $a)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }


      // echo $a;
      // die();
      $wbs = Wbs::where('id', $a)->first();
      $pengguna = Auth::getUser();
      $pengguna = Pegawai::where('nip', $pengguna['name'])->first();

      return view('admin.wbs.show', compact('wbs', 'pengguna'));
  }

  /**
   * Remove User from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      if (! Gate::allows('wbs_manage')) {
          return abort(401);
      }

      $data = wbs::findOrFail($id);
      $data->delete();

      Alert::success('Berhasil', 'Di Hapus');

      return redirect()->route('admin.wbs.index');
  }
  public function destroy_plpor_docpend(Request $request)
  {
    $jenis = $request->post('jenis');
    if ($jenis == 'Nama Pelapor') {
        ## Read POST data
        $id = $request->post('id');
        $hapus = Pelapor::findorfail($id);
        $file = public_path('/upload/wbs/ktp/').$hapus->foto_tnd_pngenal;
        if (file_exists($file)) {
            @unlink($file);
        }
        
        DB::table('temp_pelapor')->where('id', $id)->delete();
        return response()->json(['success'=>'Record saved successfully.']);
    }
    if ($jenis == 'Doc Pendukung') {
        ## Read POST data
        $id = $request->post('id');
        $hapus = DocWbs::findorfail($id);
        $file = public_path('/upload/wbs/bukti/').$hapus->jns_dokumen;
        if (file_exists($file)) {
            @unlink($file);
        }
        DB::table('temp_dokumen')->where('id', $id)->delete();
        return response()->json(['success'=>'Record saved successfully.']);
    }
    if ($jenis == 'Nama Terlapor') {
        ## Read POST data
        $id = $request->post('id');
        DB::table('temp_terlapor')->where('id', $id)->delete();
        return response()->json(['success'=>'Record saved successfully.']);
    }
    if ($jenis == 'Tim Auditor') {
        ## Read POST data
        $id = $request->post('id');
        DB::table('tb_wbs_audit')->where('id', $id)->delete();
        return response()->json(['success'=>'Record saved successfully.']);
    }
  }
  public function destroy_wbs_offln(Request $request)
  {
    $jenis = $request->post('jenis');
    if ($jenis == 'Delete Master WBS') {
        ## Read POST data
        $id = $request->post('id');
        $cek_noregis = WbsOffln::where('id', $id)->first();
        $hapus_pelapor = Pelapor::where('noregis_id', $cek_noregis->no_regis)->get();
        foreach ($hapus_pelapor as $ab) {
            $file = public_path('/upload/wbs/ktp/').$ab->foto_tnd_pngenal;
            if (file_exists($file)) {
                @unlink($file);
            }
        }
        $hapus_doc = DocWbs::where('noregis_id', $cek_noregis->no_regis)->get();
        foreach ($hapus_doc as $bc) {
            $file2 = public_path('/upload/wbs/bukti/').$bc->jns_dokumen;
            if (file_exists($file2)) {
                @unlink($file2);
            }
        }
        DB::table('temp_pelapor')->where('noregis_id', $cek_noregis->no_regis)->delete();
        DB::table('temp_dokumen')->where('noregis_id',$cek_noregis->no_regis)->delete();
        DB::table('temp_terlapor')->where('noregis_id', $cek_noregis->no_regis)->delete();

        DB::table('tb_web_wbs_offln')->where('id', $id)->delete();
        return response()->json(['success'=>'Record saved successfully.']);
    }
  }
}
