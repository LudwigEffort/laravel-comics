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
    return view('guest.home', [
        'menu' => config('menu'),
    ]);
})->name('home');

Route::get('/comics', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.comics', [
        'menu' => $menu,
        'comics' => $comics,
    ]);
})->name('comics');

Route::get('/movies', function () {
    $menu = config('menu');
    return view('guest.movies', [
        'menu' => $menu,
    ]);
})->name('movies');

Route::get('/tv', function () {
    $menu = config('menu');
    return view('guest.tv', [
        'menu' => $menu,
    ]);
})->name('tv');

Route::get('/games', function () {
    $menu = config('menu');
    return view('guest.games', [
        'menu' => $menu,
    ]);
})->name('games');

Route::get('/collectibles', function () {
    $menu = config('menu');
    return view('guest.collectibles', [
        'menu' => $menu,
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    $menu = config('menu');
    return view('guest.videos', [
        'menu' => $menu,
    ]);
})->name('videos');

Route::get('/fans', function () {
    $menu = config('menu');
    return view('guest.fans', [
        'menu' => $menu,
    ]);
})->name('fans');

Route::get('/news', function () {
    $menu = config('menu');
    return view('guest.news', [
        'menu' => $menu,
    ]);
})->name('news');

Route::get('/shop', function () {
    $menu = config('menu');
    return view('guest.shop', [
        'menu' => $menu,
    ]);
})->name('shop');
