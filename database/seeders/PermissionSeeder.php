<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Usuarios',
        ]);

        Permission::create([
            'name' => 'Crear Nutriologos',
        ]);

        Permission::create([
            'name' => 'Ver Consultas',
        ]);

        Permission::create([
            'name' => 'Hacer Consultas',
        ]);
    }
}
