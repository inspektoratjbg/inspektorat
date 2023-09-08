<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
  protected $table = "tb_absensi";

  protected $fillable = ['id', 'nip', 'nama', 'nip_atasan', 'tanggal', 'jam', 'keterangan', 'lampiran', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
