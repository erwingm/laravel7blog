<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Category;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();
        Category::truncate();

        $category = new Category;
        $category->name = "Categoria 1";
        $category->save();

        $category = new Category;
        $category->name = "Categoria 2";
        $category->save();

        $post = new Post;
        $post->title = "Mi primer post";
        $post->description = "Description Post - 1";
        $post->body = "<p>Contenido de mi Primer Posts</p>";
        $post->published_at=Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi segundo post";
        $post->description = "Description Post - 2";
        $post->body = "<p>Contenido de mi segundo Posts</p>";
        $post->published_at=Carbon::now();
        $post->category_id = 2;
        $post->save();
    }
}
