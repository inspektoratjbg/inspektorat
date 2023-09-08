<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perubahan extends Model
{
    protected $table = "tb_perubahan_sakip";

  	protected $fillable = ['nip_pihak_pertama', 'nama_pihak_pertama', 'jabatan_pihak_pertama', 'golongan_pihak_pertama', 'nip_pihak_kedua', 'nama_pihak_kedua', 'jabatan_pihak_kedua', 'golongan_pihak_kedua', 'sasaran', 'indikator_kinerja', 'target', 'tanggal_surat', 'tahun', 'status', 'urutan_per_tahun', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
