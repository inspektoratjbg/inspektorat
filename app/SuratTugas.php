<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $table = "tb_surat_tugas";

    protected $fillable = ['no_surat_tugas', 'no_agenda', 'tanggal_surat', 'pemberi_tugas', 'penerima_tugas', 'hal_surat', 'lampiran', 'jenis_surat', 'created_by', 'created_at', 'updated_at'];
}
