<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $posts = Post::where('status', 2)->latest('id')->paginate(8);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
        return view('posts.show', compact('post', 'similares'));

    }

     /* Muestra lo que tengo almacenado en $category por el metodo Category */
     public function category(Category $category){
        $posts = Post::where('category_id', $category->id)

                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(4);

        return view('posts.category', compact('posts','category'));
    }
}
