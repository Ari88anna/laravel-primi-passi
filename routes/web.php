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
    $menu = [
        'sottotitolo' => 'primi passi con Laravel',
        'links' => [
            'Installa',
            'Documentazione'
        ]
    ]; 

    return view('home', $menu);
})->name('homepage');


Route::get('/installa', function () { 
    return view('installa');
})->name('installazione');
