<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "tb_web_video";

    protected $fillable = ['judul_video', 'link_video', 'tgl_publikasi', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'];
  
}
