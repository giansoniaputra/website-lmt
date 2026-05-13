<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/product', function () {
    return view('admin.product.index', []);
});
Route::resource("/admin/product", ProductController::class);
Route::get('/dataTablesProduct', [ProductController::class, 'dataTables']);
