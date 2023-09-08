<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjanjian extends Model
{
    protected $table = "tb_modul_sakip";

  	protected $fillable = ['id', 'id_sakip', 'sasaran', 'indikator_kinerja', 'satuan', 'target', 'formulasi', 'sumber_data', 'penanggung_jawab', 'realisasi', 'capaian',  'skp_target_ak', 'skp_target_mutu', 'skp_target_waktu', 'skp_realisasi_ak', 'skp_realisasi_ouput', 'skp_realisasi_mutu', 'skp_realisasi_waktu', 'urutan_per_tahun', 'jenis_kegiatan', 'created_by', 'created_at', 'updated_at'];
}
