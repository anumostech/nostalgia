<?php

use App\Constants\RouteNames;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;

//Login users
Route::get('/', [HomeController::class, 'indexHome'])->name(RouteNames::HOME);
Route::get('/products', [ProductController::class, 'indexProduct'])->name(RouteNames::PRODUCT_LIST);
Route::get('/product/{product_id}', [ProductController::class, 'showProduct'])->name(RouteNames::PRODUCT_SHOW);

Route::get('/categories', [CategoryController::class, 'index'])->name(RouteNames::CATEGORY_LIST);
Route::get('/categories/{category_id}', [CategoryController::class, 'showCategory'])->name(RouteNames::CATEGORY_SHOW);
// Route::post('/login', [AuthController::class, 'login'])->name(RouteNames::AUTH_LOGIN_POST);

// //Error pages
// Route::post('/403', [AuthController::class, 'forBiddenError'])->name(RouteNames::FORBIDDEN_ERROR);
// Route::post('/419', [AuthController::class, 'pageExpired'])->name(RouteNames::PAGE_EXPIRED);
// Route::post('/404', [AuthController::class, 'pageNotFound'])->name(RouteNames::PAGE_NOT_FOUND);
// Route::post('/401', [AuthController::class, 'unauthorized'])->name(RouteNames::UNAUTHORIZED);
// Route::post('/500', [AuthController::class, 'serverError'])->name(RouteNames::SERVER_ERROR);

// Authenticated users
// Route::middleware(['auth'])->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout'])->name(RouteNames::LOGOUT);
// });

Route::get('/run-migrations' ,function () {
    Artisan::call('migrate:fresh', ['--force' => true]);
    return 'Migration runned successfully';
});


Route::get('/run-seeder' ,function () {
    Artisan::call('db:seed', ['--force' => true]);
    return 'Database seeded successfully';
});

Route::get('/optimize-clear' ,function () {
    Artisan::call('optimize:clear');
    return 'Optimization cache cleared';
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked';
});



