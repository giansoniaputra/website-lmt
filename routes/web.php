<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about-us', ['title' => 'About Us']);
});
Route::get('/service', function () {
    return view('service', ['title' => 'Service']);
});
Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
