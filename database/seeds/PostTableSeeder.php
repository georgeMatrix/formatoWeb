<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::truncate();
        \App\Category::truncate();
        \App\Tag::truncate();

        $tag = new \App\Tag();
        $tag->nombre = "Etiqueta 1";
        $tag->save();

        $tag = new \App\Tag();
        $tag->nombre = "Etiqueta 2";
        $tag->save();

        $categoria = new \App\Category();
        $categoria->nombre = "Categoria 1";
        $categoria->save();

        $categoria = new \App\Category();
        $categoria->nombre = "Categoria 2";
        $categoria->save();

        $post = new \App\Post();
        $post->title = "Mi primer post";
        $post->extract = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->categoria_id = 1;
        $post->fecha_creacion = \Carbon\Carbon::now()->subDays(3);
        $post->save();

        $post = new \App\Post();
        $post->title = "Mi segundo post";
        $post->extract = "Extracto de mi segundo post";
        $post->body = "<p>Contenido de mi segundo post</p>";
        $post->categoria_id = 1;
        $post->fecha_creacion = \Carbon\Carbon::now()->subDays(2);
        $post->save();

        $post = new \App\Post();
        $post->title = "Mi tercer post";
        $post->extract = "Extracto de mi tercer post";
        $post->body = "<p>Contenido de mi tercer post</p>";
        $post->categoria_id = 2;
        $post->fecha_creacion = \Carbon\Carbon::now()->subDays(1);
        $post->save();
    }
}
