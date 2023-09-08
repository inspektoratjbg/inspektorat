<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
  protected $table = "tb_web_berita";

  protected $fillable = ['judul_berita', 'isi_berita', 'slug_berita', 'foto_berita', 'arsip_berita', 'tag_berita', 'status_berita', 'tgl_publikasi', 'created_by', 'updated_by', 'created_at', 'updated_at'];

}
