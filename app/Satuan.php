<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
  protected $table = "tb_inventaris_satuan";

  protected $fillable = ['id', 'nama_satuan', 'created_at', 'updated_at'];
}
