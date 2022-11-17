<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Image;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title'  =>  'Felices Fiestas',
            'slug'  =>  'felices-fiestas',
            'extract'  =>  'Tempano les desea felices fiestas',
            'body'  =>  'Muy felices fiestas queridos Clientes',
            'status'  =>  '2',
            'category_id'  =>  '1',
            'user_id'  =>  '1'
        ]);

        Post::create([
            'title'  =>  'Nuevo Punto',
            'slug'  =>  'nuevo-punto',
            'extract'  =>  'Bienvenido a la familia',
            'body'  =>  'Sumamos un nuevo punto de venta en nuestra costanera, Bienvenido Sherwood',
            'status'  =>  '2',
            'category_id'  =>  '1',
            'user_id'  =>  '1'
        ]);



        /* $posts = Post::factory(300)->create();

        foreach ($posts as $post){
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class 
            ]); 
            $post->tags()->attach([
                rand(1, 4),
                rand(5, 8)
 
            ]);
             
        } */


    }
}
