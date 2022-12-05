<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carlos Valtierra',
            'email' => 'cmirandavaltierra@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        
        User::create([
            'name' => 'Adrian Villanueva',
            'email' => 'adrian@gmail.com',
            'password' => bcrypt('12345678')
        ]);


        User::factory(100)->create();
    }
}
