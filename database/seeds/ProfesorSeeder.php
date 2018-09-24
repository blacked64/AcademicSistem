<?php

use App\Asignatura;
use App\Profesor;
use App\User;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::truncate();
        $u = User::find(4);
        $u->profesor()->create([
        	'nombre'=>'Raúl',
        	'apellidos'=>'Castro',
        	'direccion'=>'Urb. Santa Fe',
        	'telefono'=>'04184456891'
        ]);
            $asig = Asignatura::find(1);
            $u->profesor->asignaturas()->save($asig);
            $asig = Asignatura::find(2);
            $u->profesor->asignaturas()->save($asig);
            $asig = Asignatura::find(3);
            $u->profesor->asignaturas()->save($asig);
            $asig = Asignatura::find(4);
            $u->profesor->asignaturas()->save($asig);
            $asig = Asignatura::find(5);
            $u->profesor->asignaturas()->save($asig);
    }
}
