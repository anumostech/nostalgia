<?php

use App\Constants\RouteNames;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('administrator')->middleware('auth')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'indexAdminProduct'])->name(RouteNames::ADMIN_PRODUCT_LIST);
        Route::get('/add', [ProductController::class, 'addProduct'])->name(RouteNames::PRODUCT_ADD);
        Route::post('/store', [ProductController::class, 'storeProduct'])->name(RouteNames::PRODUCT_STORE);
        Route::get('/{id}', [ProductController::class, 'showProduct'])->name(RouteNames::PRODUCT_SHOW);
        Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name(RouteNames::PRODUCT_EDIT);
        Route::post('/update/{id}', [ProductController::class, 'updateProduct'])->name(RouteNames::PRODUCT_UPDATE);
        Route::post('/delete/{id}', [ProductController::class, 'deleteProduct'])->name(RouteNames::PRODUCT_DELETE);
    });

});
