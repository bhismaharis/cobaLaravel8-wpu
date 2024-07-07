<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Bhisma Haris Alfitrah',
        'email' => 'bhismaharis11@gmail.com',
        'image' => 'Bhisma.jpg'
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        'title' => 'Posts',
        'active' => 'posts'
    ]);
});