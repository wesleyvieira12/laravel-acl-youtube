<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'id' => 1,
            'name' => 'admin',
            'description' => 'Perfil de administrador',
        ]);

        Role::insert([
            'id' => 2,
            'name' => 'user',
            'description' => 'Perfil de usuário comum',
        ]);
    }
}
