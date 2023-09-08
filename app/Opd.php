<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
  protected $table = "opds";

  protected $fillable = ['id', 'id_golongan', 'nama_instansi','kecamatan', 'created_at', 'updated_at'];
}
