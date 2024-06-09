<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::get('home', function () {
//     return view('index');
// });

Route::get('shop-all', function () {
    return view('shop-all');
});

Route::get('shop-1', function () {
    return view('shop-1');
});

Route::get('shop-2', function () {
    return view('shop-2');
});

Route::get('shop-4', function () {
    return view('shop-4');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('cart', function () {
    return view('cart');
});
Route::get('shop-item', function () {
    return view('shop-item');
});
Route::get('grid-2col', function () {
    return view('grid-2col');
});
Route::get('slider-project', function () {
    return view('slider-project');
});
Route::get('video-project', function () {
    return view('video-project');
});
Route::get('parallax-project', function () {
    return view('parallax-project');
});
Route::get('gallery-project', function () {
    return view('gallery-project');
});
Route::get('fullscreen-project', function () {
    return view('fullscreen-project');
});
Route::get('login', function () {
    return view('login');
});
Route::get('signup', function () {
    return view('signup');
});

Route::post('submitSignup', function () {
    return view('signup');
});