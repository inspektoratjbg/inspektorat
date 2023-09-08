<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    
  protected $table = "tb_pegawai";

  protected $fillable = ['nip', 'nama_pegawai', 'divisi_pegawai', 'peran_pegawai', 'golongan_pegawai', 'pesan_pegawai', 'foto_pegawai', 'arsip_pegawai', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'];

}
