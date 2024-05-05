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
            "nombre_completo"=> "javier",
            "celular"=> "323",
            "password"=> bcrypt('123'),
            "rol"=> 1,
        ])->assignRole('veterinario');

        User::factory(2)->create();
    }
}
