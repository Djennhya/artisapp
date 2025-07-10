<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop-detail', function () {
    return view('shop-detail');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/checkout', function () {
    return view('checkout');
});


Route::get('/testimonial', function () {
    return view('testimonial');
});


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('register');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');