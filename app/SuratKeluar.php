<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use Notifiable;
    use HasRoles;
    protected $table = "tb_surat_keluar";

    protected $fillable = ['no_surat_keluar', 'tanggal_keluar', 'hal_surat', 'lampiran', 'tertuju', 'alamat', 'no_agenda', 'created_by', 'created_at', 'updated_at', 'tembusan'];

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
