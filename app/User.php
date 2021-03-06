<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function Admin()
    {
        if ($this->role_id == 1) {
            return true;
        }
        return false;
    }

    public function Cliente()
    {
        if ($this->role_id == 2) {
            return true;
        }
        return false;
    }
    
    public function Estilista()
    {
        if ($this->role_id == 3) {
            return true;
        }
        return false;
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
