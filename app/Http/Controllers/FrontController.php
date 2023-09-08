<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\berita;
use App\Pengaduan;
use App\Wbs;
use App\WbsOffln;
use App\Pelapor;
use App\Terlapor;
use App\DocWbs;
use App\profil;
use App\kegiatan;
use App\pegawai;
use App\arsip;
use App\gambar;
use App\tag_berita;
use App\Video;
use Mail;
use Validator;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Haruncpi\LaravelIdGenerator\IdGenerator; 

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	public function home()
    {
        return view('front.vhome');
    }
	public function admin()
    {
        return view('auth.login');
    }

    public function index()
    {
        if (! Gate::allows('berita_manage')) {
            return abort(401);
        }

        $berita = berita::all();

        return view('admin.berita.index', compact(['berita']));
    }

    public function berita(Request $request)
    {

        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(6)->get();
        $video = DB::table('tb_web_video')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('id', 'desc')->limit(6)->get();
        $jabatan = DB::table('tb_berita')->paginate(6);

        return view('front.berita', compact(['aduan', 'profil', 'kegiatan', 'jabatan', 'berita', 'gambar', 'video']));
    }

    public function pencarian(Request $request)
    {
        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();
        $jabatan = berita::where('judul_berita', 'like', '%'.$request->cari.'%')->paginate(6);

        // echo print_r($jabatan);
        // die();
        return view('front.berita', compact(['aduan', 'profil', 'kegiatan', 'jabatan', 'berita', 'gambar']));
    }

    public function kontenberita($id)
    {
        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        // $struk_org = profil::where('nama_profil', 'Struktur Organisasi')->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $konten = berita::where('slug_berita', $id)->first();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(6)->get();

        return view('konten.berita', compact(['aduan', 'konten', 'profil', 'kegiatan', 'berita', 'gambar']));
    }

    public function galeri()
    {
        $pegawai="pegawai";
        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();
        $video = DB::table('tb_web_video')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('id', 'desc')->limit(6)->get();
        // echo print_r($video);
        $galeri = DB::table('tb_gambar')->where('kategori_gambar', 'not like', '%'.$pegawai.'%')->where('kategori_gambar', 'not like', '%'.'iklan'.'%')->where('kategori_gambar', 'not like', '%'.'header'.'%')->orderBy('id', 'desc')->paginate(6);
        $gam = $galeri;
        // die();
        return view('front.galeri', compact(['gam', 'aduan', 'gambar', 'galeri', 'profil', 'kegiatan', 'berita', 'gambar', 'video']));
    }

    public function kontenprofil($id)
    {
        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $konten = profil::where('slug_profil', $id)->first();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();

        return view('konten.profil', compact(['aduan', 'profil', 'konten', 'kegiatan', 'berita', 'gambar']));
    }

    public function kontenkegiatan($id)
    {
        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = kegiatan::all();
        $konten = kegiatan::where('slug_kegiatan', $id)->first();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();

        return view('konten.kegiatann', compact(['aduan', 'kegiatan', 'profil', 'konten', 'berita', 'gambar']));
        // return view('konten.kegiatann', compact(['aduan', 'kegiatan', 'profil', 'konten', 'jabatan', 'berita', 'gambar']));
    }

    public function kontenacara($id)
    {
        $waktu = date('Y-m-d');
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $konten = kegiatan::where('slug_kegiatan', $id)->first();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();

        return view('konten.acara', compact(['aduan', 'kegiatan', 'profil', 'konten', 'jabatan', 'berita', 'gambar']));
    }

    public function infopublik()
    {
        $waktu = date('Y-m-d');
        $pegawai="pegawai";
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();
        $arsip = DB::table('tb_arsip')->where('kategori_arsip', 'not like', '%'.$pegawai.'%')->orderBy('created_at', 'desc')->paginate(6);
        $berkas = $arsip;

        return view('front.infopublik', compact(['aduan', 'berkas', 'arsip', 'profil', 'kegiatan', 'berita', 'gambar']));
    }

    public function pengaduan()
    {
        $waktu = date('Y-m-d');
        $pegawai="pegawai";
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $kegiatan = DB::table('tb_kegiatan')->get();
        $berita = DB::table('tb_web_berita')->where('status_berita', 'aktif')->whereDate('tgl_publikasi', '<=', $waktu)->orderBy('tgl_publikasi', 'desc')->limit(5)->get();

        return view('front.pengaduan', compact(['aduan', 'profil', 'kegiatan', 'berita', 'gambar']));
    }

    public function inputpengaduan(Request $request)
    {
        $this->validate($request, [
            'nama_pelapor' => 'required',
            'nik_pelapor' => 'required',
            'kota_domisili' => 'required',
            'jenis_kelamin' => 'required',
            'email_pelapor' => 'required',
            'kontak_pelapor' => 'required',
            'alamat_pelapor' => 'required',
            'pekerjaan_pelapor' => 'required',
            'kategori_laporan' => 'required',
            'klasifikasi_instansi' => 'required',
            'nama_instansi' => 'required',
            'nama_terlapor' => 'required',
            'hubungan_pelapor' => 'required',
            'harapan_pelapor' => 'required',
            'uraian_peristiwa' => 'required',
            'bukti_laporan' => 'required|file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
            'ktp_pelapor' => 'required|file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
            'captcha' => 'required|captcha',
        ]);


        if($request->hasfile('bukti_laporan'))
         {
            $name='bukti'.'-'.Str::slug($request->nama_pelapor).'-'.date("Y-m-d").'-'.$request->file('bukti_laporan')->getClientOriginalExtension();
            $request->file('bukti_laporan')->move('upload/bukti', $name);
            $bukti = $name;
         }

         if($request->hasfile('ktp_pelapor'))
          {
             $name1='ktp'.'-'.Str::slug($request->nama_pelapor).'-'.date("Y-m-d").'-'.$request->file('ktp_pelapor')->getClientOriginalExtension();
             $request->file('ktp_pelapor')->move('upload/ktp', $name1);
             $ktp = $name1;
          }

        Pengaduan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'nik_pelapor' => $request->nik_pelapor,
            'kota_domisili' => $request->kota_domisili,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email_pelapor' => $request->email_pelapor,
            'kontak_pelapor' => $request->kontak_pelapor,
            'alamat_pelapor' => $request->alamat_pelapor,
            'pekerjaan_pelapor' => $request->pekerjaan_pelapor,
            'kategori_laporan' => $request->kategori_laporan,
            'klasifikasi_instansi' => $request->klasifikasi_instansi,
            'nama_instansi' => $request->nama_instansi,
            'nama_terlapor' => $request->nama_terlapor,
            'hubungan_pelapor' => $request->hubungan_pelapor,
            'harapan_pelapor' => $request->harapan_pelapor,
            'uraian_peristiwa' => $request->uraian_peristiwa,
            'bukti_laporan' => $bukti,
            'ktp_pelapor' => $ktp,
        ]);

        Alert::success('Pengetahuan Berhasil Terkirim', $request->judul_pelapor);

        return redirect()->route('front.pengaduan');
    }

    public function wbs()
    {
        return view('front.wbs');
    }

    public function inputwbs(Request $request)
    {
        $this->validate($request, [
            'nama_pelapor' => 'required',
            'nik_pelapor' => 'required',
            'email_pelapor' => 'required',
            'kontak_pelapor' => 'required',
            'alamat_pelapor' => 'required',
            'nama_instansi' => 'required',
            'jabatan' => 'required',
            'perihal' => 'required',
            'nama_terlapor' => 'required',
            'uraian_peristiwa' => 'required',
            'bukti_laporan' => 'required|file|max:5120',
            'ktp_pelapor' => 'required|image|max:2120',
        ]);
				// die();
            $IdGenerate = IdGenerator::generate(['table' => 'tb_web_wbs_offln', 'field' => 'no_regis', 'length' => 7, 'prefix' => 'RGS']);
        //PROSES CHAPTCHA LAWAS
            function generateRandomString($length = 8) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            $token = generateRandomString();

            $rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make($request->all(), $rules);

        //PROSES CHAPTCHA BARU
            // $input = $request->all();
            // $kode_rechaptcha_secret = "6Lc8yeInAAAAAJlFilg7s8oR_w8d0HLHhYiBf9Gd";
            // $respon = file_get_contents("https://www.google.com/rechaptcha/api/siteverify?secret".$kode_rechaptcha_secret."&response".$input['g-recaptcha-response']);
            // $respon = json_decode($respon, true);
            //     if ($respon["success"] == true) {
            //         dd("Berhasil");
            //     } else {
            //         dd("gagal");
            //     }
                
        if ($validator->fails())
        {
            Alert::error('Maaf Captcha anda salah Sdr/Bpk/Ibu ', $request->nama_pelapor);
        }
        else
        {

            if($request->hasfile('bukti_laporan'))
            {
                $name='bukti'.'-'.Str::slug($request->nama_pelapor).'-'.date("Y-m-d").'.'.$request->file('bukti_laporan')->getClientOriginalExtension();
                $request->file('bukti_laporan')->move(public_path('upload/wbs/bukti'), $name);
                $bukti = $name;
            }

            if($request->hasfile('ktp_pelapor'))
            {
                $name1='ktp'.'-'.Str::slug($request->nama_pelapor).'-'.date("Y-m-d").'.'.$request->file('ktp_pelapor')->getClientOriginalExtension();
                $request->file('ktp_pelapor')->move(public_path('upload/wbs/ktp'), $name1);
                $ktp = $name1;
            }
            //   dd($name1);
            //Source Code Lama
                // Wbs::create([
                //     'token' => $token,
                //     'nama_pelapor' => $request->nama_pelapor,
                //     'nik_pelapor' => $request->nik_pelapor,
                //     'email_pelapor' => $request->email_pelapor,
                //     'kontak_pelapor' => $request->kontak_pelapor,
                //     'alamat_pelapor' => $request->alamat_pelapor,
                //     'nama_instansi' => $request->nama_instansi,
                //     'nama_terlapor' => $request->nama_terlapor,
                //     'uraian_peristiwa' => $request->uraian_peristiwa,
                //     'bukti_laporan' => $bukti,
                //     'ktp_pelapor' => $ktp,
                //     'catatan_feedback' => 1,
                //     'lampiran_feedback' => 1,
                //     'status' => 1,
                //     'publikasi' => 1,
                // ]);
            // Source Code Baru
                Pelapor::create([
                    'noregis_id' => $IdGenerate,
                    'nama_pelapor' => $request->nama_pelapor,
                    'foto_tnd_pngenal' => $ktp,
                    'tanda_pengenal' => 'NIK',
                    'no_tnd_pengenal' => $request->nik_pelapor,   
                    'created_at' => now()
                ]);
                Terlapor::create([
                    'noregis_id' => $IdGenerate,
                    'nama_terlapor' => $request->nama_pelapor,
                    'nik' => '-',
                    'alamat' => '-',
                    'jabatan' => $request->jabatan,
                    'instansi' => $request->nama_instansi,
                    'created_at' => now(),
                ]);
                DocWbs::create([
                    'noregis_id' => $IdGenerate,
                    'jns_dokumen' => $bukti,
                    'created_at' => now()
                ]);
                WbsOffln::create([
                    'no_regis' => $IdGenerate,
                    'token_web' => $token,
                    'no_laporan' => '-',
                    'tgl_lapor' => now(),
                    'tgl_terima_lpr' => now(),
                    'perihal' => $request->perihal,
                    'isi_aduan' => $request->uraian_peristiwa,
                    'pendftrn_aduan' => '-',
                    'jns_pelapor' => '-',
                    'lok_kejadian' => '-',
                    'wkt_kejadian' => '-',
                    'ctt_petugas' => '-',
                    'media_penyimpan' => 'Website',
                    'status' => 'Belum Ditindaklanjuti',
                    'created_at' => now()
                ]);
                        // die();
            try{
                // Mail::send('email', ['nama' => $request->nama_pelapor, 'pesan' => $request->uraian_peristiwa, 'terlapor' => $request->nama_terlapor, 'instansi' => $request->nama_instansi, 'token' => $token], function ($message) use ($request)
                // {
                //     $message->subject($request->nama_pelapor);
                //     $message->from('wbs.inspektorat@gmail.com', 'WBS Inspektorat Kabupaten Jombang');
                //     $message->to($request->email_pelapor, $request->nama_pelapor);
                                //
                // });

            //DIKOMEN SEMENTARA
                // $data = array('nama' => $request->nama_pelapor, 'pesan' => $request->uraian_peristiwa, 'terlapor' => $request->nama_terlapor, 'instansi' => $request->nama_instansi, 'token' => $token);
                // $kirim = Mail::send('email', $data, function($message) use ($request) {
                // $message->to($request->email_pelapor, $request->nama_pelapor)->subject($request->nama_pelapor);
                // $message->from('wbs.inspektorat@gmail.com','WBS Inspektorat Kabupaten Jombang');
                // });


            }
            catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
            Alert::success('Pengaduan Berhasil Terkirim oleh Sdr/Bpk/Ibu ', $request->nama_pelapor);
        }

    return redirect()->route('front.wbs');
    }

    public function cariwbs(Request $request)
    {

        // echo 'sadasdasd';

        $feedback = Wbs::where('token', $request->token)->where('status', 3)->first();

        // echo print_r($feedback);
        // die();
        if ($feedback==null) {
            Alert::warning('Mohon Maaf', 'Pengaduan belum selesai diproses');
            return redirect()->route('front.wbs');
        } else{
            Alert::success('Pengaduan telah berhasil diproses oleh Sdr/Bpk/Ibu ', $feedback->nama_pelapor);
            return view('front.feedbackwbs', compact(['feedback']));
        }
    }

    public function refreshCaptcha()
    {
      return captcha_img('math');
    }

    public function pegawai()
    {
        $profil = profil::where('tag_profil', 'not like', '%'.'pengaduan'.'%')->limit(5)->get();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'iklan'.'%')->limit(5)->get();
        $aduan = profil::where('tag_profil', 'like', '%'.'pengaduan'.'%')->limit(5)->get();
        $pegawai = DB::table('tb_pegawai')
              ->join('tb_status_pegawai', 'tb_status_pegawai.id', '=', 'tb_pegawai.divisi_pegawai')
              ->join('tb_jabatan', 'tb_jabatan.id', '=', 'tb_pegawai.peran_pegawai')
              ->join('tb_golongan', 'tb_golongan.id', '=', 'tb_pegawai.golongan_pegawai')
              ->select('tb_pegawai.*' ,'tb_jabatan.nama_jabatan', 'tb_golongan.nama_golongan', 'tb_status_pegawai.status_kepegawaiaan')
              ->paginate(6);
        $pag=$pegawai;
        $kegiatan = DB::table('tb_kegiatan')->get();
        $berita = DB::table('tb_berita')->orderBy('id', 'desc')->limit(6)->get();

        return view('front.pegawai', compact(['aduan', 'pag', 'pegawai', 'profil', 'kegiatan', 'berita', 'gambar']));
    }

		public function absensi()
    {
				$pegawai = DB::table('tb_pegawai')->get();
        return view('front.absensi', compact(['pegawai']));
    }

    public function inputabsensi(Request $request)
    {

				// echo $request->tanggal;
				// die();

        $this->validate($request, [
						'tanggal' => 'required',
						'nip_atasan' => 'required',
						'jam' => 'required',
						'lampiran' =>  'required|file|image|mimes:txt,xlxs,doc,pdf,jpeg,png,jpg|max:5120',
        ]);

				$pegawai = DB::table('tb_pegawai')->where('id', $request->nip)->first();
				// echo print_r($pegawai);
				// echo $pegawai->nip;
				// die();
        function generateRandomString($length = 8) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $token = generateRandomString();

        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            Alert::error('Maaf Captcha anda salah Sdr/Bpk/Ibu ', $request->nama_pelapor);
        }
        else
        {
						$file = $request->file('lampiran');
						$data = [];
						if ($request->file('lampiran')!=null) {
								if($request->hasfile('lampiran'))
								{
										$name=date("Y-m-d").'-'.Str::slug($pegawai->nip).'-'.date("h-i-sa").$file->getClientOriginalName();
										// echo $request->created_by;
										// die();
										$file->move(public_path('upload/absensi'), $name);

										Absensi::create([
												'nip' => $pegawai->nip,
												'nama' => $pegawai->nama_pegawai,
												'nip_atasan' => $request->nip_atasan,
												'tanggal' => $request->tanggal,
												'keterangan' => '',
												'jam' => $request->jam,
												'lampiran' => $name,
												'created_by' => $pegawai->nama_pegawai,
												'updated_by' => '',
										]);

								}
								$file=json_encode($data);
						}

            Alert::success('Absensi Berhasil Terkirim oleh Sdr/Bpk/Ibu ', $request->nama);
        }

        return redirect()->route('front.absensi');
    }

}
