<?php

namespace App;

use App\Estudiante;
use App\Profesor;
use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
        public function estudiante(){
            return $this->hasOne(Estudiante::class);
        }
        public function profesor(){
            return $this->hasOne(Profesor::class);
        }

}
