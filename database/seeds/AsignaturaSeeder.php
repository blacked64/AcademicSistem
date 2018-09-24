<?php

use App\Asignatura;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignatura::truncate();

        Asignatura::create([
        	'nombre_clave'=> 'MathI',
            'nombre_descriptivo'=>'Matemáticas I',
            'descripcion'=>'Matemáticas I Básica',
        ]);

        Asignatura::create([
            'nombre_clave'=> 'CasLiI',
            'nombre_descriptivo'=>'Castellano y Literatura I',
            'descripcion'=>'Castellano y Literatura I Básica',
        ]);

        Asignatura::create([
            'nombre_clave'=> 'IngI',
            'nombre_descriptivo'=>'Inglés I',
            'descripcion'=>'Inglés I Básica',
        ]);

        Asignatura::create([
            'nombre_clave'=> 'GeoI',
            'nombre_descriptivo'=>'Geografía e Historia I',
            'descripcion'=>'Geografía e Historia I Básica',
        ]);

        Asignatura::create([
            'nombre_clave'=> 'FamI',
            'nombre_descriptivo'=>'Educación Familiar I',
            'descripcion'=>'Educación Familiar I Básica',
        ]);       
    }
}
