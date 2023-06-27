<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

    Route::view('/about', 'about')->name('about');
    Route::view('/blog', 'blog')->name('blog');
    Route::view('/contacto', 'contacto')->name('contacto');
    /* Route::view('/Prueba', 'Prueba', ['posts' => $posts])->name('Prueba'); */
    Route::get('/Prueba', [PostController::class, 'index'])->name('Prueba'); 
    
