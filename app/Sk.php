<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    protected $table = "tb_sk";

    protected $fillable = ['no_sk', 'no_agenda', 'tanggal_surat', 'bertanda_tangan', 'opd', 'hal_surat', 'lampiran', 'created_by', 'created_at', 'updated_at'];
}
