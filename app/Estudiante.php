<?php

namespace App;

use App\Calificacion;
use App\Seccion;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'direccion', 'telefono', 'promedio'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function seccion(){
    	return $this->belongsToMany(Seccion::class)->withTimestamps();
    }
    public function calificaciones(){
    	return $this->morphToMany(Calificacion::class, 'calificacionable')->withTimestamps();
    }
}
