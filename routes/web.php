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
    $data = [
        'home' => 'benvenuto/a'
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'about' => 'Siamo.....'
    ];
    return view('chi-siamo',$data);
})->name('chi_siamo');

Route::get('/contact', function () {
    $data = [
        'contatti' => ['numero di telefono','indirizzo','città','mail']
    ];
    return view('contatti',$data);
})->name('contact');