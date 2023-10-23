<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\docente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $alumnoSeeder = new AlumnoSeeder();
        $alumnoSeeder -> run();

        $docenteSeeder = new DocenteSeeder();
        $docenteSeeder -> run();

        $cursoseeder = new Cursoseeder();
        $cursoseeder -> run();
        
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
