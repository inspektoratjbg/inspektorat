<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    
  protected $table = "tb_gambar";

  protected $fillable = ['judul_gambar', 'nama_gambar', 'kategori_gambar', 'tag_gambar', 'created_by', 'updated_by', 'created_at', 'updated_at'];

}
