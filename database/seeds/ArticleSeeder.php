<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => "2",
            'title' => "Selamat Datang Orang Miskin!",
            'body' => "Mau Kaya? Makanya Main Forex!",            
            'created_at' => Carbon::now()->toDateString(),      
        ]);
    }
}
