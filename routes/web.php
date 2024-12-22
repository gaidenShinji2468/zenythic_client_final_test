<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// iframe proxies

Route::get('/deportes_envivo_proxy', function () {
    $url = 'https://casino-fortunato.com/front/deportes_envivos';
    $content = file_get_contents($url);

    return response($content)->header('Content-Type', 'text/html');
});

Route::get('/recomendados_proxy', function () {
    $url = 'https://casino-fortunato.com/front/deportes_recomendados';
    $content = file_get_contents($url);

    return response($content)->header('Content-Type', 'text/html');
});


Route::get('/proximos_proxy', function () {
    $url = 'https://casino-fortunato.com/front/deportes_proximos';
    $content = file_get_contents($url);

    return response($content)->header('Content-Type', 'text/html');
});