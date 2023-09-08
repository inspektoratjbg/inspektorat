<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
  protected $table = "tb_kegiatan";

  protected $fillable = ['judul_kegiatan', 'isi_kegiatan', 'slug_kegiatan', 'foto_kegiatan', 'arsip_kegiatan', 'tag_kegiatan', 'status_kegiatan', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
