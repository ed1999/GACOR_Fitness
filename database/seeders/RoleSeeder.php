<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role = Role::create([ 'name' => 'Admin']);

       $role->permissions()->attach([1, 2, 3]);

       $role = Role::create(['name' => 'Nutriologos']);

       $role->syncPermissions('Ver Consultas');

       $role = Role::create(['name' => 'Usuario']);

       $role->syncPermissions('Ver Consultas');
    }
}

