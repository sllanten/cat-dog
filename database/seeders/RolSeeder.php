<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolVt= Role::create(['name' => 'veterinario']);
        $rolUsu= Role::create(['name' => 'propietario']);

        Permission::create(['name' => 'login'])->syncRoles([$rolVt, $rolUsu]);;

        Permission::create(['name' => 'veterinario.dashboard'])->assignRole($rolVt);
        Permission::create(['name' => 'veterinario.boardDetalle'])->assignRole($rolVt);

        Permission::create(['name' => 'usuario.dashboard'])->assignRole($rolUsu);
        Permission::create(['name' => 'usuario.boardDetalle'])->assignRole($rolUsu);

    }
}
