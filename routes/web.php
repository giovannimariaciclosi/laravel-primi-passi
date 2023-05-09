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

    $helloWorld = "Hello World";

    $frameworks = [
        'Next.js',
        'Laravel',
        'Vue.js',
        'React',
        'Angular'
    ];

    return view('home', compact('helloWorld', 'frameworks'));
})->name('home');

Route::get('/laravel', function () {
    $laravel = "I'm Laravel";

    return view('laravel', compact('laravel'));
})->name('laravel');

Route::get('/vue', function () {
    $vue = "I'm Vue.js";

    return view('vue', compact('vue'));
})->name('vue');

Route::get('/next', function () {
    $next = "I'm Next.js";

    return view('next', compact('next'));
})->name('next');
