<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();

        for ($i=0; $i < 10; $i++) {
      Article::create([
        'title'   => 'Title '.$i,
        'slug'    => 'first-page',
        'body'    => 'Body '.$i,
        'image'    => 'image '.$i,
        'user_id' => 1,
      ]);
    }
    }

}