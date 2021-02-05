<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "SuperAdmin Ganteng",
            'email' => "superadmin@forex.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('superadminGanteng'),
        ]);

        DB::table('users')->insert([
            'name' => "AdminGanteng",
            'email' => "admin@forex.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('adminGanteng'),
        ]);

        DB::table('users')->insert([
            'name' => "januar",
            'email' => "januarelsan@gmail.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('qwerty123'),
        ]);
    }
}
