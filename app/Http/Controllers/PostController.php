<?php

namespace App\Http\Controllers;

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

        $posts = DB::table('posts')->get();

        return view('Prueba', ['posts' => $posts]);

    }
}
