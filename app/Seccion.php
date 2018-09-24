<?php

namespace App;

use App\Asignatura;
use App\Estudiante;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $fillable = ['seccion', 'curso', 'promedio'];

    public function estudiantes(){
		return $this->belongsToMany(Seccion::class)->withTimestamps();
    }
    public function asignaturas(){
    	return $this->belongsToMany(Asignatura::class)->withTimestamps();
    }
}
