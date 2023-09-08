<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKepegawaiaan extends Model
{
    protected $table = "tb_surat_kepegawaiaan";

    protected $fillable = ['no_surat_kepegawaiaan', 'no_agenda', 'tanggal_surat', 'bertanda_tangan', 'tertuju', 'hal_surat', 'lampiran', 'created_by', 'created_at', 'updated_at'];
}
