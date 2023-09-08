<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terlapor extends Model
{
    
  protected $table = "temp_terlapor";

  protected $fillable = ['id', 'noregis_id','nama_terlapor', 'nik', 'alamat', 'jabatan', 'instansi', 'created_at', 'updated_at'];

}
