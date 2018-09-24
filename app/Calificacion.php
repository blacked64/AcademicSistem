<?php

namespace App;

use App\Asignatura;
use App\Estudiante;
use App\Profesor;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $fillable = ['calificacion', 'estado'];

      public function estudiantes(){
    	return $this->morphedByMany(Estudiante::class, 'calificacionable')->withTimestamps();
    }
      public function asignaturas(){
    	return $this->morphedByMany(Asignatura::class, 'calificacionable')->withTimestamps();
    }
    public function profesor(){
    	return $this->belongsTo(Profesor::class);
    }
}
