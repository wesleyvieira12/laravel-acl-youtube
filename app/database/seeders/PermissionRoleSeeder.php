<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMIN - add_role(1) e show_role(2)
        Role::find(1)->permissions()->attach([1,2]);

        //user - show_role(2)
        Role::find(2)->permissions()->attach(2);
    }
}
