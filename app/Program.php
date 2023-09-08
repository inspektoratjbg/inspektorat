<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "tb_program_sakip";

  	protected $fillable = ['id', 'id_sakip', 'program', 'anggaran', 'urutan_per_tahun', 'created_by', 'created_at', 'updated_at'];
}
