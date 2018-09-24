<?php

namespace App;

use App\Calificacion;
use App\Profesor;
use App\Seccion;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = ['nombre_clave', 'nombre_descriptivo', 'descripcion'];

    public function calificaciones(){
    	return $this->morphToMany(Calificacion::class, 'calificacionable')->withTimestamps();
    }
    public function secciones(){
    	return $this->belongsToMany(Seccion::class)->withTimestamps();
    }
    public function profesores(){
    	return $this->belongsToMany(Profesor::class)->withTimestamps();
    }
}
