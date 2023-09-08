<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
  protected $table = "tb_web_pengaduan";

  protected $fillable = ['id', 'nama_pelapor', 'nik_pelapor', 'kota_domisili', 'jenis_kelamin', 'email_pelapor', 'kontak_pelapor', 'alamat_pelapor', 'pekerjaan_pelapor', 'kategori_laporan', 'klasifikasi_instansi', 'nama_instansi', 'nama_terlapor', 'hubungan_pelapor', 'harapan_pelapor', 'uraian_peristiwa', 'bukti_laporan', 'ktp_pelapor', 'created_at', 'updated_at'];

}
