<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  protected $table = "tb_inventaris_barang";

  protected $fillable = ['id', 'nama_barang', 'id_satuan', 'harga_barang', 'id_jenis_barang', 'created_at', 'updated_at'];

}
