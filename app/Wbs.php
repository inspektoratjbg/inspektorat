<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wbs extends Model
{
  protected $table = "tb_web_wbs";

  protected $fillable = ['id', 'token', 'nama_pelapor', 'nik_pelapor', 'email_pelapor', 'kontak_pelapor', 'alamat_pelapor', 'nama_instansi', 'nama_terlapor', 'uraian_peristiwa', 'bukti_laporan', 'ktp_pelapor', 'catatan_feedback', 'lampiran_feedback', 'status', 'publikasi', 'created_at', 'updated_at'];
}
