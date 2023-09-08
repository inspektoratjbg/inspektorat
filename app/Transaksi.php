<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $table = "tb_inventaris_transaksi";

  protected $fillable = ['id', 'tanggal_diterima', 'id_barang', 'id_satuan', 'merk', 'tahun_pembuatan', 'saldo_awal', 'barang_masuk', 'harga_satuan', 'irban_pemb', 'irban_ek', 'irban_keu', 'irban_pem', 'sekret', 'sisa', 'no_surat', 'keterangan', 'created_by', 'created_at', 'updated_at'];
}
