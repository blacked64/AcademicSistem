<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::truncate();
        Role::create([

        	'nombre_clave'=>'admin',
        	'nombre_descriptivo'=>'Administrador de la Institución',
        	'descripcion'=>'Administrador del Instituto Jose Antonio Maitín'
        	
        ]);

        Role::create([

        	'nombre_clave'=>'director',
        	'nombre_descriptivo'=>'Director de la Institución',
        	'descripcion'=>'Director del Instituto Jose Antonio Maitín'
        	
        ]);

        Role::create([

        	'nombre_clave'=>'secretaria',
        	'nombre_descriptivo'=>'Secretaria de la Institución',
        	'descripcion'=>'Secretaria del Instituto Jose Antonio Maitín'

        ]);

        Role::create([

        	'nombre_clave'=>'profesor',
        	'nombre_descriptivo'=>'Profesor de la Institución',
        	'descripcion'=>'Profesor del Instituto Jose Antonio Maitín'
        	
        ]);

        Role::create([

        	'nombre_clave'=>'estudiante',
        	'nombre_descriptivo'=>'Estudiante de la Institución',
        	'descripcion'=>'Estudiante del Instituto Jose Antonio Maitín'
        	
        ]);
    }
}
