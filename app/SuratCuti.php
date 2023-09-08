<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratCuti extends Model
{
    protected $table = "tb_surat_cuti";

    protected $fillable = ['no_surat_cuti', 'no_agenda', 'tanggal_surat', 'pemberi_cuti', 'penerima_cuti', 'hal_surat', 'lampiran', 'created_by', 'created_at', 'updated_at'];
}
