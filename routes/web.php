<?php

use App\Constants\RouteNames;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;

// WEBSITE ROUTES

Route::get('/', [HomeController::class, 'indexHome'])->name(RouteNames::HOME);
Route::get('/about', [HomeController::class, 'indexAbout'])->name(RouteNames::ABOUT);
Route::get('/cart', [HomeController::class, 'indexCart'])->name(RouteNames::CART);
Route::get('/checkout', [HomeController::class, 'indexCheckout'])->name(RouteNames::CHECKOUT);
Route::get('/contact', [HomeController::class, 'indexContact'])->name(RouteNames::CONTACT);
Route::get('/faq', [HomeController::class, 'indexFaq'])->name(RouteNames::FAQ);
Route::get('/my-account', [HomeController::class, 'indexMyAccount'])->name(RouteNames::MY_ACCOUNT);
Route::get('/privacy', [HomeController::class, 'indexPrivacy'])->name(RouteNames::PRIVACY);
Route::get('/terms-and-conditions', [HomeController::class, 'indexTermsandConditions'])->name(RouteNames::TERMS_AND_CONDITIONS);
Route::get('/track-your-order', [HomeController::class, 'indexTrackYourOrder'])->name(RouteNames::TRACK_YOUR_ORDER);
Route::get('/wishlist', [HomeController::class, 'indexWishlist'])->name(RouteNames::WISHLIST);
Route::get('/products', [ProductController::class, 'indexProduct'])->name(RouteNames::PRODUCT_LIST);
Route::get('/product/{product_id}', [ProductController::class, 'showProduct'])->name(RouteNames::PRODUCT_SHOW);
Route::get('/categories', [CategoryController::class, 'index'])->name(RouteNames::CATEGORY_LIST);
Route::get('/categories/{category_id}', [CategoryController::class, 'showCategory'])->name(RouteNames::CATEGORY_SHOW);

// ADMIN LOGIN (GUEST ONLY)

Route::prefix('administrator')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name(RouteNames::LOGIN);
    Route::post('/login', [AuthController::class, 'login'])->name(RouteNames::AUTH_LOGIN_POST);

    // Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name(RouteNames::FORGOT_PASSWORD);
    Route::post('/forgot-password', [AuthController::class, 'sendResetCode'])->name(RouteNames::FORGOT_PASSWORD_POST);
    Route::get('/reset-password', [AuthController::class, 'showResetPassword'])->name(RouteNames::RESET_PASSWORD);
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name(RouteNames::RESET_PASSWORD_POST);
});

// ADMIN AUTHENTICATED

Route::prefix('administrator')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'indexDashboard'])->name(RouteNames::DASHBOARD);
    Route::get('/logout', [AuthController::class, 'logout'])->name(RouteNames::LOGOUT);

    // Admin Products
    Route::get('/products', [ProductController::class, 'indexAdminProduct'])->name(RouteNames::ADMIN_PRODUCT_LIST);
    Route::get('/products/add', [ProductController::class, 'addProduct'])->name(RouteNames::PRODUCT_ADD);
    Route::post('/products/store', [ProductController::class, 'storeProduct'])->name(RouteNames::PRODUCT_STORE);
    Route::get('/products/edit/{product}', [ProductController::class, 'editProduct'])->name(RouteNames::PRODUCT_EDIT);
    Route::post('/products/update/{product}', [ProductController::class, 'updateProduct'])->name(RouteNames::PRODUCT_UPDATE);
    Route::get('/products/delete/{id}', [ProductController::class, 'deleteProduct'])->name(RouteNames::PRODUCT_DELETE);

    // Admin Categories
    Route::get('/categories', [CategoryController::class, 'indexAdminCategory'])->name(RouteNames::ADMIN_CATEGORY_LIST);
    Route::get('/categories/add', [CategoryController::class, 'addCategory'])->name(RouteNames::CATEGORY_ADD);
    Route::post('/categories/store', [CategoryController::class, 'storeCategory'])->name(RouteNames::CATEGORY_STORE);
    Route::get('/categories/edit/{id}', [CategoryController::class, 'editCategory'])->name(RouteNames::CATEGORY_EDIT);
    Route::get('/categories/update/{id}', [CategoryController::class, 'updateCategory'])->name(RouteNames::CATEGORY_UPDATE);
    Route::get('/categories/delete/{id}', [CategoryController::class, 'deleteCategory'])->name(RouteNames::CATEGORY_DELETE);

    // Profile Settings
    Route::get('/profile', [ProfileController::class, 'index'])->name(RouteNames::PROFILE_SETTINGS);
    Route::post('/profile/update', [ProfileController::class, 'update'])->name(RouteNames::PROFILE_UPDATE);
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name(RouteNames::PROFILE_CHANGE_PASSWORD);
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
