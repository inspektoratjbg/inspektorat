<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "tb_jabatan";

    protected $fillable = ['nama_jabatan', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
