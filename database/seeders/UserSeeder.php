<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Role Admin
        // $adminRole = new Role;
        // $adminRole->name = "admin";
        // $adminRole->display_name = "Admin";
        // $adminRole->save();

        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->save();
    }
}
