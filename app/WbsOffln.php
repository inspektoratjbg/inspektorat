<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbsOffln extends Model
{
  protected $table = "tb_web_wbs_offln";

  protected $fillable = ['id', 'no_regis','token_web', 'no_laporan','tgl_lapor', 'tgl_terima_lpr', 'perihal', 'isi_aduan', 'pendftrn_aduan', 'jns_pelapor', 'jns_pelapor_lain', 'lok_kejadian', 'wkt_kejadian', 'ctt_petugas','jns_potensi', 'media_penyimpan','status', 'created_at', 'updated_at'];
}
