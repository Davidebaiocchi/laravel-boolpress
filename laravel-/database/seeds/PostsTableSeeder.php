<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 10; $i++) {

            // creare istanza
            $newPost = new Post();

            // generare dati
            $newPost->title = 'Post Numero :' . ($i + 1);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->content = "lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem loremlorem lorem lorem";
            
            // salvare dati
            $newPost->save();
        }
    }
}
