<?php

use Illuminate\Support\Facades\Route;

/**
 * Route::get  | Consultar
 * Route::post  | Guardar
 * Route::delete  | Eliminar
 * Route::put  | Actualizar
 */

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    // consulta a BDs
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
    ];
    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    $post = $slug;
    return view('post', ['post' => $post]);
});
