<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/home');
Route::get('/front/admin', 'FrontController@admin')->name('front.admin');
Auth::routes(['register' => false]);

//Frontend website
Route::get('/front/home', 'FrontController@home')->name('front.home');
Route::get('/', function () {
    return view('front/vhome');
});
Route::get('/front/berita', 'FrontController@berita')->name('front.berita');
Route::post('/front/pencarian', 'FrontController@pencarian')->name('front.pencarian');
Route::get('/konten/berita/{id}', 'FrontController@kontenberita')->name('konten.berita');
Route::get('/front/profil', 'FrontController@profil')->name('front.profil');
Route::get('/konten/profil/{id}', 'FrontController@kontenprofil')->name('konten.profil');
Route::get('/front/kegiatan', 'FrontController@kegiatan')->name('front.kegiatan');
Route::get('/konten/kegiatan/{id}', 'FrontController@kontenkegiatan')->name('konten.kegiatan');
Route::get('/front/galeri', 'FrontController@galeri')->name('front.galeri');
Route::get('/front/infopublik', 'FrontController@infopublik')->name('front.infopublik');
Route::get('/front/pengaduan', 'FrontController@pengaduan')->name('front.pengaduan');
Route::get('/front/wbs', 'FrontController@wbs')->name('front.wbs');
Route::get('/front/absensi', 'FrontController@absensi')->name('front.absensi');
Route::get('/front/feedbackwbs', 'FrontController@feedbackwbs')->name('front.feedbackwbs');
Route::post('/front/cariwbs', 'FrontController@cariwbs')->name('front.cariwbs');
Route::post('/front/inputpengaduan', 'FrontController@inputpengaduan')->name('front.inputpengaduan');
Route::post('/front/inputwbs', 'FrontController@inputwbs')->name('front.inputwbs');
Route::post('/front/inputabsensi', 'FrontController@inputabsensi')->name('front.inputabsensi');
Route::get('/refresh_captcha', 'FrontController@refreshCaptcha')->name('refresh');
Route::get('/front/pegawai', 'FrontController@pegawai')->name('front.pegawai');
Route::get('/konten/perkenalan/{id}', 'FrontController@perkenalan')->name('konten.perkenalan');
Route::put('progress', 'WbsController@progress')->name('wbs.progress');


Route::get('/pegawai_api', 'PegawaiController@api_peg');
Route::get('/opd_api', 'PegawaiController@api_opd');
Route::get('/ambil_data_peg', 'PegawaiController@api_peg_get');
Route::get('/ambil_data_opd', 'PegawaiController@api_opd_get');


// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');

    //Inventaris
    Route::resource('barang', 'BarangController');
    Route::post('barang/import_excel', 'BarangController@import_excel')->name('barang.import_excel');
    Route::resource('satuan', 'SatuanController');
    Route::resource('jenisbarang', 'JenisBarangController');
    Route::resource('transaksi', 'TransaksiController');
    Route::post('transaksi/bulananprint', 'TransaksiController@bulananprint')->name('transaksi.bulananprint');
    Route::post('transaksi/tahunanprint', 'TransaksiController@tahunanprint')->name('transaksi.tahunanprint');
    Route::post('transaksi/beritaacarapembelian', 'TransaksiController@beritaacarapembelian')->name('transaksi.beritaacarapembelian');

    // e-surat
    Route::resource('surat_masuk', 'SuratMasukController');
    Route::post('surat_masuk_mass_destroy', 'SuratMasukController@massDestroy')->name('surat_masuk.mass_destroy');
    Route::get('surat_masuk/print/{id}', 'SuratMasukController@print')->name('surat_masuk.print');
    Route::post('surat_masuk/import_excel', 'SuratMasukController@import_excel')->name('surat_masuk.import_excel');
    Route::resource('surat_keluar', 'SuratKeluarController');
    Route::post('surat_keluar_mass_destroy', 'SuratKeluarController@massDestroy')->name('surat_keluar.mass_destroy');
    Route::resource('disposisi', 'DisposisiController');
    Route::post('disposisi_mass_destroy', 'DisposisiController@massDestroy')->name('disposisi.mass_destroy');
    Route::resource('surattugas', 'SuratTugasController');
    Route::post('surattugas_mass_destroy', 'SuratTugasController@massDestroy')->name('surattugas.mass_destroy');
    Route::resource('suratcuti', 'SuratCutiController');
    Route::post('suratcuti_mass_destroy', 'SuratCutiController@massDestroy')->name('suratcuti.mass_destroy');
    Route::resource('sk', 'SkController');
    Route::post('sk_mass_destroy', 'SkController@massDestroy')->name('sk.mass_destroy');
    Route::resource('suratkepegawaiaan', 'SuratKepegawaiaanController');
    Route::post('suratkepegawaiaan_mass_destroy', 'SuratKepegawaiaanController@massDestroy')->name('suratkepegawaiaan.mass_destroy');
    Route::resource('undangan', 'UndanganController');
    Route::post('undangan_mass_destroy', 'UndanganController@massDestroy')->name('undangan.mass_destroy');


    //website
    Route::resource('arsip', 'ArsipController');
    Route::post('arsip_mass_destroy', 'ArsipController@massDestroy')->name('arsip.mass_destroy');
    Route::resource('berita', 'BeritaController');
    Route::post('berita_mass_destroy', 'BeritaController@massDestroy')->name('berita.mass_destroy');
    Route::resource('gambar', 'GambarController');
    Route::post('gambar_mass_destroy', 'GambarController@massDestroy')->name('gambar.mass_destroy');
    Route::resource('profil', 'ProfilController');
    Route::post('profil_mass_destroy', 'ProfilController@massDestroy')->name('profil.mass_destroy');
    Route::resource('kegiatan', 'KegiatanController');
    Route::post('kegiatan_mass_destroy', 'KegiatanController@massDestroy')->name('kegiatan.mass_destroy');
    Route::resource('tag', 'TagBeritaController');
    Route::post('tag_mass_destroy', 'TagBeritaController@massDestroy')->name('tag.mass_destroy');
    Route::resource('pengaduan', 'PengaduanController');
    Route::put('progress', 'WbsController@progress')->name('wbs.progress');
    Route::resource('video', 'VideoController');
    Route::resource('wbs', 'WbsController');
    Route::get('wbs/add/input_wbs/', 'WbsController@add');
    Route::post('wbs2/hapus_wbs_offln/', 'WbsController@destroy_wbs_offln');
    Route::post('wbs2/tambah_pelapor/', 'WbsController@store_pelapor');
    Route::post('wbs2/hapus_pelpor_docPend/', 'WbsController@destroy_plpor_docpend');
    Route::get('wbs2/show_json_docwbs/{id}', 'WbsController@json_docwbs');
    Route::get('wbs2/show_json_docwbs_ed/{id}', 'WbsController@json_docwbs_ed');
    Route::post('wbs2/tambah_doc_pend/', 'WbsController@store_docwbs');
    Route::post('wbs2/store_wbs_offln/', 'WbsController@store_wbs_offln');
    Route::post('wbs2/ed_status/', 'WbsController@edit_status');
    Route::post('wbs2/update_status/', 'WbsController@update_status');
    Route::get('wbs2/Detail_Pengaduan_Masyarkat/{id}', 'WbsController@view');
    Route::get('wbs2/Form_Pengaduan_Masyarkat/{id}', 'WbsController@form_pengaduan');
    Route::get('wbs2/show_terlapor_wbs/{id}', 'WbsController@json_terlapor_wbs');
    Route::post('wbs2/tambah_trlpor/', 'WbsController@store_terlpor');
    Route::get('wbs2/show_TimAuditor_wbs/{id}', 'WbsController@json_TmAuditor_wbs');
    Route::post('wbs2/tambah_TmAuditor/', 'WbsController@store_TmAuditor');
    Route::get('wbs2/show_trlpor_wbs_ed/{id}', 'WbsController@trlpor_wbs_ed');
    // Route::get('wbs2/edit/', 'WbsController@add');
    // Route::get('wbs2/destroy/', 'WbsController@add');
    Route::get('wbs2/pelapor/', 'WbsController@cek_pelapor');
    Route::get('wbs2/form_aduan/', 'WbsController@form_aduan');
    Route::get('wbs2/rekap_wbs/', 'WbsController@rekap_wbs');

    //Data Kepegawaiaan
    Route::resource('pegawai', 'PegawaiController');
    Route::post('pegawai_mass_destroy', 'PegawaiController@massDestroy')->name('pegawai.mass_destroy');
    Route::get('/pegawai/lihat/{id}', 'PegawaiController@lihat')->name('pegawai.lihat');
    Route::resource('golongan', 'GolonganController');
    // Route::get('/golongan/cari/{id}', 'GolonganController@cari')->name('golongan.cari');
    Route::get('golongan/cari','GolonganController@cari')->name('golongan.cari');
    Route::resource('jabatan', 'JabatanController');
    Route::resource('status', 'StatusPegawaiController');

    //sakip
    Route::resource('perjanjian', 'PerjanjianController');
    Route::post('perjanjian_mass_destroy', 'PerjanjianController@massDestroy')->name('perjanjian.mass_destroy');
    Route::resource('pengukuran', 'PengukuranController');
    Route::resource('indikator', 'IndikatorController');
    Route::resource('sakip', 'SakipController');
    Route::post('sakip_mass_destroy', 'SakipController@massDestroy')->name('sakip.mass_destroy');
    Route::get('/sakip/list', 'SakipController@list')->name('sakip.list');
    Route::get('/sakip/pesan/{id}', 'SakipController@pesan')->name('sakip.pesan');
    Route::resource('sakipp', 'SakippController');
    Route::get('/sakipp/dash/{id}', 'SakippController@dash')->name('sakipp.dash');
    Route::post('/sakipp/dashh', 'SakippController@dashh')->name('sakipp.dashh');
    Route::get('/sakipp/verif1/{id}', 'SakippController@verif1')->name('sakipp.verif1');
    Route::get('/sakipp/verif2/{id}', 'SakippController@verif2')->name('sakipp.verif2');
    Route::get('/sakipp/verif3/{id}', 'SakippController@verif3')->name('sakipp.verif3');
    Route::get('/sakipp/verif4/{id}', 'SakippController@verif4')->name('sakipp.verif4');
    Route::resource('program', 'ProgramController');
    Route::get('/program/tambah/{id}', 'ProgramController@tambah')->name('program.tambah');
    Route::resource('tupoksi', 'TupoksiController');
    Route::get('/tupoksi/tambah/{id}', 'TupoksiController@tambah')->name('tupoksi.tambah');

    Route::post('perjanjian_mass_destroy', 'PerjanjianController@massDestroy')->name('perjanjian.mass_destroy');
    Route::get('/perjanjian/list/{id}', 'PerjanjianController@list')->name('perjanjian.list');
    Route::get('/perjanjian/tambah/{id}', 'PerjanjianController@tambah')->name('perjanjian.tambah');
    Route::get('/perjanjian/print/{id}', 'PerjanjianController@print')->name('perjanjian.print');
    Route::get('/perjanjian/sasaran/{id}', 'PerjanjianController@sasaran')->name('perjanjian.sasaran');
    Route::get('/perjanjian/laporan/{id}', 'PerjanjianController@laporan')->name('perjanjian.laporan');
    Route::get('/pengukuran/list/{id}', 'PengukuranController@list')->name('pengukuran.list');
    Route::get('/pengukuran/print/{id}', 'PengukuranController@print')->name('pengukuran.print');
    Route::get('/pengukuran/tahunan/{id}', 'PengukuranController@tahunan')->name('pengukuran.tahunan');
    Route::get('/pengukuran/laporan/{id}', 'PengukuranController@laporan')->name('pengukuran.laporan');
    Route::get('/indikator/list/{id}', 'IndikatorController@list')->name('indikator.list');
    Route::get('/indikator/print/{id}', 'IndikatorController@print')->name('indikator.print');
    Route::get('/penilaiaan/menu/{id}', 'PenilaiaanController@menu')->name('penilaiaan.menu');
    Route::get('/penilaiaan/skplist/{id}', 'PenilaiaanController@skplist')->name('penilaiaan.skplist');
    Route::get('/penilaiaan/skpprogress/{id}', 'PenilaiaanController@skpprogress')->name('penilaiaan.skpprogress');
    Route::get('/penilaiaan/pengukuranlist/{id}', 'PenilaiaanController@pengukuranlist')->name('penilaiaan.pengukuranlist');
    Route::get('/penilaiaan/pengukuranprogress/{id}', 'PenilaiaanController@pengukuranprogress')->name('penilaiaan.pengukuranprogress');
    Route::get('/penilaiaan/penilaiaanlist/{id}', 'PenilaiaanController@penilaiaanlist')->name('penilaiaan.penilaiaanlist');
    Route::get('/penilaiaan/penilaiaanprogress/{id}', 'PenilaiaanController@penilaiaanprogress')->name('penilaiaan.penilaiaanprogress');
    Route::get('/penilaiaan/penilaiaanprogress/{id}', 'PenilaiaanController@penilaiaanprogress')->name('penilaiaan.penilaiaanprogress');
    Route::put('/penilaiaan/skpupdate', 'PenilaiaanController@skpupdate')->name('penilaiaan.skpupdate');
    Route::put('/penilaiaan/pengukuranupdate', 'PenilaiaanController@pengukuranupdate')->name('penilaiaan.pengukuranupdate');
    Route::put('/penilaiaan/penilaiaanupdate', 'PenilaiaanController@penilaiaanupdate')->name('penilaiaan.penilaiaanupdate');
    Route::get('/penilaiaan/skpprint/{id}', 'PenilaiaanController@skpprint')->name('penilaiaan.skpprint');
    Route::get('/penilaiaan/pengukuranprint/{id}', 'PenilaiaanController@pengukuranprint')->name('penilaiaan.pengukuranprint');
    Route::get('/penilaiaan/penilaiaanprint/{id}', 'PenilaiaanController@penilaiaanprint')->name('penilaiaan.penilaiaanprint');


    Route::resource('absensi', 'AbsensiController');
    Route::get('/total', 'AbsensiController@total')->name('absensi.total');

});
