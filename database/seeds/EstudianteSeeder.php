<?php

use App\Estudiante;
use App\Seccion;
use App\User;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Estudiante::truncate();
        $u = User::find(5);
        $u->estudiante()->create([
        	'nombre'=>'José',
        	'apellidos'=>'Guzman',
        	'direccion'=>'Urb. Santa Paz',
        	'telefono'=>'04184445891'
        ]);
        $s = Seccion::find(1);
        $u->estudiante->seccion()->save($s);

        $u = User::find(6);
        $u->estudiante()->create([
            'nombre'=>'Antonio',
            'apellidos'=>'Contreras',
            'direccion'=>'Urb. Los Cayos',
            'telefono'=>'04124496820'
        ]);
        $s = Seccion::find(2);
        $u->estudiante->seccion()->save($s);
        
    }
}
