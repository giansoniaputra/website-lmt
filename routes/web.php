<?php

use App\Models\Product;
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
Route::get('/buyback', function () {
    return view('buyback', ['title' => 'buyback']);
});
Route::get('/product', function () {
    return view('product', [
        'title' => 'Product',
        'products' => Product::paginate(12)
    ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
Route::get('/edukasi', function () {
    return view('edukasi', ['title' => 'edukasi']);
});
// Route::get('/buyback', function () {
//     return view('buyback', [
//         'title' => 'Buyback',
//         'products' => Product::paginate(12)
//     ]);
// });

