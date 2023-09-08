<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    
  protected $table = "tb_profil";

  protected $fillable = ['judul_profil', 'isi_profil', 'slug_profil', 'foto_profil', 'arsip_profil', 'tag_profil', 'status_profil', 'created_by', 'updated_by', 'created_at', 'updated_at'];

}
