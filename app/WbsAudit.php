<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbsAudit extends Model
{
  protected $table = "tb_wbs_audit";

  protected $fillable = ['id', 'no_regis', 'nama_auditor', 'peran_auditor', 'created_at', 'updated_at'];
}
