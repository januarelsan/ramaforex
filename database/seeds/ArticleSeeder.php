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
            'img_url' => "blog_imgs/in-blog-image-10.jpg",
            'body' => "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",            
            'created_at' => Carbon::now()->toDateString(),      
        ]);

        DB::table('article_tags')->insert([
            'article_id' => "1",
            'tag_id' => "1",
        ]);

        DB::table('article_tags')->insert([
            'article_id' => "1",
            'tag_id' => "2",
        ]);
    }
}
