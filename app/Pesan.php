<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = "tb_pesan_sakip";

    protected $fillable = ['id', 'id_sakip', 'isi_pesan', 'penerima_pesan', 'pemberi_pesan', 'peran_pesan', 'tipe_pesan', 'created_by', 'created_at', 'updated_at'];  

}
