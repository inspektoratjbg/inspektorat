<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocWbs extends Model
{
    
  protected $table = "temp_dokumen";

  protected $fillable = ['id', 'noregis_id','jns_dokumen', 'jumlah', 'ket', 'created_at', 'updated_at'];

}
