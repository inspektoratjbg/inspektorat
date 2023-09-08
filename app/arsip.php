<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arsip extends Model
{
  protected $table = "tb_arsip";

  protected $fillable = ['judul_arsip', 'nama_arsip', 'kategori_arsip', 'tag_arsip', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
