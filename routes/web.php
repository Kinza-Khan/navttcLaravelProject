<?php
use App\Http\Controllers\contactController;

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::view('/','index')->name('/');
//Route::get('/', [productController::class, 'index'])->name('/');

Route::view('shop-all','shop-all')->name('shop-all');

Route::view('shop-1','shop-1')->name('shop-1');

Route::view('shop-2','shop-2')->name('shop-2');

Route::view('shop-4','shop-4')->name('shop-4');

Route::view('shop-4','shop-4')->name('shop-4');

Route::view('contact','contact')->name('contact');

Route::view('cart','cart')->name('cart');

Route::view('shop-item','shop-item')->name('shop-item');

Route::view('grid-2col','grid-2col')->name('grid-2col');

Route::view('slider-project','slider-project')->name('slider-project');

Route::view('video-project','video-project')->name('video-project');

Route::view('parallax-project','parallax-project')->name('parallax-project');

Route::view('gallery-project','gallery-project')->name('gallery-project');

Route::view('fullscreen-project','fullscreen-project')->name('fullscreen-project');


// Route::view('signup','signup')->name('signup');
// Route::post('register', [userController::class, 'registerUser'])->name('register');

// Route::view('login','login')->name('login');
// Route::post('loginUser', [userController::class, 'loginUser'])->name('loginUser');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [productController::class, 'index'])->name('dashboard');
});

Route::post('/contact', [contactController::class, 'submitForm'])->name('contact.submit');
