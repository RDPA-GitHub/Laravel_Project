<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        /* $posts = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Third Post'],
            ['title' => 'Fourth Post']
        ]; */

        /* $posts = DB::table('posts')->get(); */

         $posts = Post::get();
         $posts2 = Post2::get();

        return view('posts.index', 
         [
            'posts'=>$posts,
            'posts2'=>$posts2
        ]);

    }

    /* public function show($post){

        return Post::findOrFail($post);
    } */

    public function show($id){

            $post = Post::where('id', $id)->firstOrFail();

        return view('posts.show', ['perrito'=>$post]);

    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $respuesta){
        
        $resp = new Post;
        $resp->title = $respuesta->input('title');
        $resp->body = $respuesta->input('body');
        $resp->save();

        return to_route('posts.index');
    }
}
