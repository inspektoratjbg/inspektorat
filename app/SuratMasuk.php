<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Authenticatable
{
	use Notifiable;
    use HasRoles;
    protected $table = "tb_surat_masuk1";

    protected $fillable = ['id', 'no_surat_masuk', 'pengirim', 'tanggal_masuk', 'tanggal_surat', 'hal_surat', 'lampiran', 'no_agenda', 'pengolah', 'disposisi', 'isi_disposisi', 'created_by'];

    // protected $fillable = ['nama','alamat'];

    // return redirect('/pegawai');
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }


    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
