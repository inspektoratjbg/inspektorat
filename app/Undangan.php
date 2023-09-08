<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $table = "tb_undangan";

    protected $fillable = ['no_surat_undangan', 'no_agenda', 'tanggal_surat', 'pemberi', 'tertuju', 'hal_surat', 'lampiran', 'jenis_undangan', 'created_by', 'created_at', 'updated_at'];
}
