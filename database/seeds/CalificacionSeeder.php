<?php

use App\Asignatura;
use App\Calificacion;
use App\User;
use Illuminate\Database\Seeder;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calificacion::truncate();

        $p = User::find(4);
       $cal = $p->profesor->calificaciones()->create([
        	'calificacion'=>'18',
        	'estado'=>'aprobado'
        ]);

       	$m = Asignatura::find(1);
       	$m->calificaciones()->save($cal);
        $a = User::find(5);
        $a->estudiante->calificaciones()->save($cal);

       $cal = $p->profesor->calificaciones()->create([
        	'calificacion'=>'13',
        	'estado'=>'aprobado'
        ]);

       	$m = Asignatura::find(2);
       	$m->calificaciones()->save($cal);
        $a = User::find(5);
        $a->estudiante->calificaciones()->save($cal);

       $cal = $p->profesor->calificaciones()->create([
        	'calificacion'=>'10',
        	'estado'=>'aprobado'
        ]);

        $m = Asignatura::find(3);
       	$m->calificaciones()->save($cal);
        $a = User::find(5);
        $a->estudiante->calificaciones()->save($cal);

       $cal = $p->profesor->calificaciones()->create([
        	'calificacion'=>'03',
        	'estado'=>'reprobado'
        ]);

        $m = Asignatura::find(1);
       	$m->calificaciones()->save($cal);
        $a = User::find(6);
        $a->estudiante->calificaciones()->save($cal);

       $cal = $p->profesor->calificaciones()->create([
        	'calificacion'=>'09',
        	'estado'=>'reprobado'
        ]);

        $m = Asignatura::find(5);
       	$m->calificaciones()->save($cal);
        $a = User::find(6);
        $a->estudiante->calificaciones()->save($cal);

    }
}
