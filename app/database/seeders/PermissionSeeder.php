<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            'id' => 1,
            'name' => 'add_role',
            'description' => 'Adicionar um papel',
        ]);

        Permission::insert([
            'id' => 2,
            'name' => 'show_role',
            'description' => 'Ver os papeis',
        ]);
    }
}
