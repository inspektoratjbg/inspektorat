<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected $table = "tb_indikator_sakip";

  	protected $fillable = ['nip_pihak_pertama', 'nama_pihak_pertama', 'jabatan_pihak_pertama', 'golongan_pihak_pertama', 'nip_pihak_kedua', 'nama_pihak_kedua', 'jabatan_pihak_kedua', 'golongan_pihak_kedua','kinerja' ,'indikator_kinerja' ,'formulasi_perhitungan' ,'sumber_data' ,'penanggung_jawab', 'tanggal_surat', 'tahun', 'status', 'urutan_per_tahun', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
