<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{

	use Notifiable;
    use HasRoles;
    
	protected $table = "tb_disposisi";
    protected $fillable = ['disposisi', 'deskripsi', 'created_by'];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
