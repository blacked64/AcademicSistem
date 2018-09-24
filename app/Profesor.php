<?php

namespace App;

use App\Asignatura;
use App\Calificacion;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'direccion', 'telefono'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function asignaturas(){
    	return $this->belongsToMany(Asignatura::class)->withTimestamps();
    }
    public function calificaciones(){
    	return $this->hasMany(Calificacion::class);
    }
}
