<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    
  protected $table = "temp_pelapor";

  protected $fillable = ['id', 'noregis_id','nama_pelapor','foto_tnd_pngenal', 'tanda_pengenal', 'no_tnd_pengenal', 'created_at', 'updated_at'];

}
