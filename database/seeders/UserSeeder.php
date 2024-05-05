<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol= Role::create(['name' => 'veterinario']);
        $rol= Role::create(['name' => 'propietario']);

        Permission::create(['name' => '']);
        
    }
}
