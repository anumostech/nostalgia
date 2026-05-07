<?php // Test Edit

use App\Constants\RouteNames;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\AuthController as WebAuthController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Artisan;

// WEBSITE ROUTES

Route::get('/', [HomeController::class, 'indexHome'])->name(RouteNames::HOME);
Route::get('/about', [HomeController::class, 'indexAbout'])->name(RouteNames::ABOUT);
Route::get('/cart', [CartController::class, 'index'])->name(RouteNames::CART);
Route::post('/cart/add', [CartController::class, 'add'])->name(RouteNames::CART_ADD);
Route::post('/cart/update', [CartController::class, 'update'])->name(RouteNames::CART_UPDATE);
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name(RouteNames::CART_REMOVE);
Route::get('/cart/clear', [CartController::class, 'clear'])->name(RouteNames::CART_CLEAR);
Route::get('/checkout', [HomeController::class, 'indexCheckout'])->name(RouteNames::CHECKOUT);
Route::post('/checkout', [CartController::class, 'processCheckout'])->name(RouteNames::CHECKOUT_PROCESS);

Route::get('/my-account', [HomeController::class, 'indexMyAccount'])->name(RouteNames::MY_ACCOUNT);
Route::middleware(['auth', 'verified_user'])->group(function () {
    Route::get('/wishlist', [HomeController::class, 'indexWishlist'])->name(RouteNames::WISHLIST);
});

Route::get('/profile/edit', [HomeController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [HomeController::class, 'updateProfile'])->name('profile.update');
Route::get('/order-success/{order_id}', [CartController::class, 'orderSuccess'])->name(RouteNames::ORDER_SUCCESS);
Route::post('/order/cancel/{id}', [HomeController::class, 'cancelOrder'])->name('order.cancel');
Route::get('/contact', [HomeController::class, 'indexContact'])->name(RouteNames::CONTACT);
Route::get('/faq', [HomeController::class, 'indexFaq'])->name(RouteNames::FAQ);
Route::get('/privacy', [HomeController::class, 'indexPrivacy'])->name(RouteNames::PRIVACY);
Route::get('/terms-and-conditions', [HomeController::class, 'indexTermsandConditions'])->name(RouteNames::TERMS_AND_CONDITIONS);
Route::get('/track-your-order', [HomeController::class, 'indexTrackYourOrder'])->name(RouteNames::TRACK_YOUR_ORDER);


Route::get('/products', [ProductController::class, 'indexProduct'])->name(RouteNames::PRODUCT_LIST);
Route::get('/product/{product_id}', [ProductController::class, 'showProduct'])->name(RouteNames::PRODUCT_SHOW);
Route::get('/categories', [CategoryController::class, 'index'])->name(RouteNames::CATEGORY_LIST);
Route::get('/categories/{category_id}', [CategoryController::class, 'showCategory'])->name(RouteNames::CATEGORY_SHOW);

// WEBSITE AUTH ROUTES
Route::middleware('guest')->group(function () {
    Route::get('/register', [WebAuthController::class, 'showRegister'])->name(RouteNames::REGISTER);
    Route::post('/register', [WebAuthController::class, 'register'])->name(RouteNames::REGISTER_POST);
    Route::get('/login', [WebAuthController::class, 'showLogin'])->name(RouteNames::LOGIN);
    Route::post('/login', [WebAuthController::class, 'login'])->name(RouteNames::AUTH_LOGIN_POST);
    Route::get('/otp-login', [WebAuthController::class, 'showOtpLogin'])->name(RouteNames::OTP_LOGIN);
    Route::post('/otp-login', [WebAuthController::class, 'sendLoginOtp'])->name(RouteNames::OTP_LOGIN_POST);

    // Forgot Password
    Route::get('/forgot-password', [\App\Http\Controllers\Auth\PasswordController::class, 'showForgotPassword'])->name(RouteNames::FORGOT_PASSWORD);
    Route::post('/forgot-password', [\App\Http\Controllers\Auth\PasswordController::class, 'sendResetCode'])->name(RouteNames::FORGOT_PASSWORD_POST);
    Route::get('/reset-password', [\App\Http\Controllers\Auth\PasswordController::class, 'showResetPassword'])->name(RouteNames::RESET_PASSWORD);
    Route::post('/reset-password', [\App\Http\Controllers\Auth\PasswordController::class, 'resetPassword'])->name(RouteNames::RESET_PASSWORD_POST);
});

Route::get('/verify-otp/{user_id}', [OtpController::class, 'showVerify'])->name(RouteNames::OTP_VERIFY);
Route::post('/verify-otp', [OtpController::class, 'verify'])->name(RouteNames::OTP_VERIFY_POST);
Route::post('/resend-otp', [OtpController::class, 'resend'])->name(RouteNames::OTP_RESEND);
Route::get('/logout', [WebAuthController::class, 'logout'])->name(RouteNames::LOGOUT);


// ADMIN LOGIN (GUEST ONLY)

Route::prefix('administrator')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name(RouteNames::ADMIN_LOGIN);
    Route::post('/login', [AuthController::class, 'login'])->name(RouteNames::ADMIN_AUTH_LOGIN_POST);

    // Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name(RouteNames::ADMIN_FORGOT_PASSWORD);
    Route::post('/forgot-password', [AuthController::class, 'sendResetCode'])->name(RouteNames::ADMIN_FORGOT_PASSWORD_POST);
    Route::get('/reset-password', [AuthController::class, 'showResetPassword'])->name(RouteNames::ADMIN_RESET_PASSWORD);
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name(RouteNames::ADMIN_RESET_PASSWORD_POST);
});

// ADMIN AUTHENTICATED

Route::prefix('administrator')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'indexDashboard'])->name(RouteNames::DASHBOARD);
    Route::get('/logout', [AuthController::class, 'logout'])->name(RouteNames::ADMIN_LOGOUT);

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


    Route::prefix('settings')->group(function () {
        Route::get('/cart-threshold', [SettingController::class, 'indexThreshold'])->name(RouteNames::CART_THRESHOLD_ADD);
        Route::post('/cart-threshold/store', [SettingController::class, 'storeThreshold'])->name(RouteNames::CART_THRESHOLD_STORE);
    });

    // Checkout Management (Orders)
    Route::get('/orders', [DashboardController::class, 'indexOrders'])->name(RouteNames::ADMIN_ORDER_LIST);
    Route::get('/orders/{id}', [DashboardController::class, 'showOrder'])->name(RouteNames::ADMIN_ORDER_SHOW);
    Route::get('/orders/edit/{id}', [DashboardController::class, 'editOrder'])->name(RouteNames::ORDER_EDIT);
    Route::post('/orders/update/{id}', [DashboardController::class, 'updateOrder'])->name(RouteNames::ORDER_UPDATE);
    Route::get('/orders/delete/{id}', [DashboardController::class, 'deleteOrder'])->name(RouteNames::ORDER_DELETE);
    Route::post('/orders/update-status/{id}', [DashboardController::class, 'updateOrderStatus'])->name(RouteNames::ADMIN_ORDER_UPDATE_STATUS);

    // Admin Customers
    Route::get('/customers', [CustomerController::class, 'index'])->name(RouteNames::CUSTOMER_LIST);
    Route::get('/customers/add', [CustomerController::class, 'create'])->name(RouteNames::CUSTOMER_ADD);
    Route::post('/customers/store', [CustomerController::class, 'store'])->name(RouteNames::CUSTOMER_STORE);
    Route::get('/customers/edit/{id}', [CustomerController::class, 'edit'])->name(RouteNames::CUSTOMER_EDIT);
    Route::post('/customers/update/{id}', [CustomerController::class, 'update'])->name(RouteNames::CUSTOMER_UPDATE);
    Route::get('/customers/delete/{id}', [CustomerController::class, 'destroy'])->name(RouteNames::CUSTOMER_DELETE);
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

Route::get('/run-new-migrations', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'New migrations run successfully';
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked';
});
