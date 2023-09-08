<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sakip extends Model
{
    protected $table = "tb_sakip";

  	protected $fillable = ['tipe_sakip', 'nip_pihak_pertama', 'nama_pihak_pertama', 'jabatan_pihak_pertama', 'golongan_pihak_pertama', 'nip_pihak_kedua', 'nama_pihak_kedua', 'jabatan_pihak_kedua', 'golongan_pihak_kedua', 'tanggal_surat', 'tahun', 'status1', 'status2', 'status3', 'status4', 'urutan_per_tahun', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
