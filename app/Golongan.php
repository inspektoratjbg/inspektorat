<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = "tb_golongan";

    protected $fillable = ['nama_golongan', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
