<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "tb_status_pegawai";

    protected $fillable = ['status_kepegawaiaan', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
