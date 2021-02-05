<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * Role
     * 1 = superadmin
     * 2 = admin
     * 3 = reviewer
     * 4 = member
     * 5 = visitor
     */
    public function run()
    {
        //
        DB::table('user_roles')->insert([
            'user_id' => 1,
            'role_id' => 1,            
        ]);

        DB::table('user_roles')->insert([
            'user_id' => 2,
            'role_id' => 2,            
        ]);

        DB::table('user_roles')->insert([
            'user_id' => 3,
            'role_id' => 4,            
        ]);
    }
}
