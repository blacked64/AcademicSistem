<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
         $this->call(RoleSeeder::class);
         $this->call(AsignaturaSeeder::class);
         $this->call(SeccionSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(ProfesorSeeder::class);
         $this->call(EstudianteSeeder::class);
         $this->call(CalificacionSeeder::class);
    }
}
