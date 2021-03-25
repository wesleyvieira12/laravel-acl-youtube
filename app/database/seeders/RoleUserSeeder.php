<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMINISTRADOR COM PAPEL DE ADMIN
        User::find(1)->roles()->attach(1);

        //user COM PAPEL DE user
        User::find(2)->roles()->attach(2);
    }
}
