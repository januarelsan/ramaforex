<?php

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
        DB::table('roles')->insert([
            'name' => "Super Admin",
            'level' => 1,            
        ]);

        DB::table('roles')->insert([
            'name' => "Admin",
            'level' => 2,            
        ]);

        DB::table('roles')->insert([
            'name' => "Reviewer",
            'level' => 3,            
        ]);

        DB::table('roles')->insert([
            'name' => "Premium Member",
            'level' => 4,            
        ]);

        DB::table('roles')->insert([
            'name' => "Guest",
            'level' => 5,            
        ]);
    }
}
