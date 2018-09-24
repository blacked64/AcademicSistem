<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['nombre_clave', 'nombre_descriptivo', 'descripcion'];

    public function users(){
    	return $this->belongsToMany(User::class)->withTimestamps();
    }
}
