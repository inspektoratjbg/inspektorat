<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
  protected $table = "tb_inventaris_jenis_barang";

  protected $fillable = ['id', 'nama_jenis_barang', 'created_at', 'updated_at'];
}
