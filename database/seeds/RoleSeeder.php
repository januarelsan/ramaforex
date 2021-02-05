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
            'name' => "superadmin",
            'level' => 1,            
        ]);

        DB::table('roles')->insert([
            'name' => "admin",
            'level' => 2,            
        ]);

        DB::table('roles')->insert([
            'name' => "reviewer",
            'level' => 3,            
        ]);

        DB::table('roles')->insert([
            'name' => "member",
            'level' => 4,            
        ]);

        DB::table('roles')->insert([
            'name' => "guest",
            'level' => 5,            
        ]);
    }
}
