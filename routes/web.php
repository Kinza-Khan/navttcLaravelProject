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