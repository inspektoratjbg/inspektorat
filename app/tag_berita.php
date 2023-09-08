<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag_berita extends Model
{
    protected $table = "tb_tag";

	protected $fillable = ['nama_tag', 'kategori_tag', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
