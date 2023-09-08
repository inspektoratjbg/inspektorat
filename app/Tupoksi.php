<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tupoksi extends Model
{
    protected $table = "tb_indikator_tugas_fungsi_sakip";

  	protected $fillable = ['id', 'id_sakip', 'indikator', 'tipe_indikator', 'urutan_per_tahun', 'created_by', 'created_at', 'updated_at'];
}
