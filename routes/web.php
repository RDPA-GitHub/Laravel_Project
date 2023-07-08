<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use App\Models\Post;

// Laravel-9.test

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Esta funcion me permite mostrar una fucion en especifico.
/* Route::get('/', function () {
    
        return [
            'Aprendible' => '.com',
            'Laravel' => 'Projecto_1'
        ];
    
    //return view('welcome');
}); */

// -----------------------------------------------------------------------------------
// Zona funciones con dada

    /* $posts = [
        ['title' => 'First Post'],
        ['title' => 'Second Post'],
        ['title' => 'Third Post'],
        ['title' => 'Fourth Post']
    ]; */

// -----------------------------------------------------------------------------------

// Para Mostrar una Vista normal podemos hacerlo de la siguiente manera
Route::view('/', 'welcome')->name('home');

// Generamos varias vistas a mostrar con distintas rutas

    Route::view('/about', 'about')->name('about')/* ->middleware('auth') */;
    Route::view('/blog', 'blog')->name('blog');
    Route::view('/contacto', 'contacto')->name('contacto');
    /* Route::view('/Prueba', 'Prueba', ['posts' => $posts])->name('Prueba'); */
    
    // ********************************************************************************
    // Rutas de Enlace: 
    Route::get('/Prueba', [PostController::class, 'index'])->name('posts.index'); 
    Route::get('/Prueba/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('Prueba', [PostController::class, 'store'])->name('posts.store');
    Route::get('/Prueba/{data}', [PostController::class, 'show'])->name('posts.show');

    // *********************************************************************************
    // Ruta Login:
    Route::get('/login', function(){

        return 'Login Page';

    })->name('login');

    //Ruta Auth:
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    
    
