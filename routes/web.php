<?php

use App\Constants\RouteNames;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;

// WEBSITE ROUTES

Route::get('/', [HomeController::class, 'indexHome'])->name(RouteNames::HOME);
Route::get('/products', [ProductController::class, 'indexProduct'])->name(RouteNames::PRODUCT_LIST);
Route::get('/product/{product_id}', [ProductController::class, 'showProduct'])->name(RouteNames::PRODUCT_SHOW);
Route::get('/categories', [CategoryController::class, 'index'])->name(RouteNames::CATEGORY_LIST);
Route::get('/categories/{category_id}', [CategoryController::class, 'showCategory'])->name(RouteNames::CATEGORY_SHOW);

// ADMIN LOGIN (GUEST ONLY)

Route::prefix('administrator')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name(RouteNames::LOGIN);
    Route::post('/login', [AuthController::class, 'login'])->name(RouteNames::AUTH_LOGIN_POST);
});

// ADMIN AUTHENTICATED

Route::prefix('administrator')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'indexDashboard'])->name(RouteNames::DASHBOARD);
    Route::get('/logout', [AuthController::class, 'logout'])->name(RouteNames::LOGOUT);
});


Route::get('/run-migrations', function () {
    Artisan::call('migrate:fresh', ['--force' => true]);
    return 'Migration runned successfully';
});


Route::get('/run-seeder', function () {
    Artisan::call('db:seed', ['--force' => true]);
    return 'Database seeded successfully';
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return 'Optimization cache cleared';
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked';
});
