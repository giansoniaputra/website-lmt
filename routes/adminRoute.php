<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('admin.product.index', [
            'title' => 'Product'
        ]);
    });
    Route::resource("/admin/product", ProductController::class);
    Route::get('/dataTablesProduct', [ProductController::class, 'dataTables']);
});

Route::middleware('guest')->group(function () {
    Route::get('/admin/auth', [AuthController::class, 'index'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate']);
});
