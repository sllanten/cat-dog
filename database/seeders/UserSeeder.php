<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nombre_completo"=> "Javier",
            "celular"=> "323",
            "password"=> bcrypt('123'),
            "rol"=> 1,
        ])->assignRole('veterinario');

        User::create([
            "nombre_completo"=> "Diana",
            "celular"=> "311",
            "password"=> bcrypt('123'),
            "rol"=> 1,
        ])->assignRole('propietario');

        // User::factory(2)->create();
    }
}
