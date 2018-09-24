<?php

use App\Asignatura;
use App\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seccion::truncate();

        $s = Seccion::create([
        	'seccion'=> 'A',
        	'curso'=> '7mo',
        ]);
        $asig = Asignatura::find(1);
        $s->asignaturas()->save($asig);
        $asig = Asignatura::find(2);
        $s->asignaturas()->save($asig);
        $asig = Asignatura::find(3);
        $s->asignaturas()->save($asig);

        $s = Seccion::create([
        	'seccion'=> 'B',
        	'curso'=> '7mo',
        ]);
        $asig = Asignatura::find(4);
        $s->asignaturas()->save($asig);
        $asig = Asignatura::find(5);
        $s->asignaturas()->save($asig);
    }
}
