<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = "tb_prestasi_kerja";

    protected $fillable = ['id', 'id_sakip', 'pelayanan', 'integritas', 'komitmen', 'disiplin', 'kerjasama', 'kepemimpinan', 'created_by', 'created_at', 'updated_at'];  
}
