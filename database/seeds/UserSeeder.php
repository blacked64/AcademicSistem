<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
    	$u = User::create([
    		'name'=>'Admin',
    		'email'=>'admin@admin.com',
    		'password'=>bcrypt('123123')
    	]);
    	$r = Role::find(1);
    	$u->roles()->save($r);

    	$u = User::create([
    		'name'=>'Director',
    		'email'=>'director@director.com',
    		'password'=>bcrypt('123123')
    	]);
    	$r = Role::find(2);
    	$u->roles()->save($r);

    	$u = User::create([
    		'name'=>'Secretaria',
    		'email'=>'secretaria@secretaria.com',
    		'password'=>bcrypt('123123')
    	]);
    	$r = Role::find(3);
    	$u->roles()->save($r);

    	$u = User::create([
    		'name'=>'Profesor',
    		'email'=>'profesor@profesor.com',
    		'password'=>bcrypt('123123')
    	]);
    	$r = Role::find(4);
    	$u->roles()->save($r);

    	$u = User::create([
    		'name'=>'Estudiante',
    		'email'=>'estudiante@estudiante.com',
    		'password'=>bcrypt('123123')
    	]);
    	$r = Role::find(5);
    	$u->roles()->save($r); 

        $u = User::create([
            'name'=>'Estudiante 2',
            'email'=>'estudiante2@estudiante.com',
            'password'=>bcrypt('123123')
        ]);
        $r = Role::find(5);
        $u->roles()->save($r); 
    }
}
