<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\Admin\CategoryController as AdminCategory;
use App\Http\Controllers\Admin\AdminProductController as AdminServices;
use App\Http\Controllers\Admin\PostController as AdminPost;

use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/how', function () {
    return view('how');
})->name('how');

Route::get('posts', [EventController::class, 'index']);
Route::get('posts/{post:slug}', [EventController::class, 'show']);

Route::get('sign-in-google', [UserController::class, 'google'])->name(
    'user.login.google'
);
Route::get('auth/google/callback', [
    UserController::class,
    'handleProviderCallback',
])->name('user.google.callback');

// route kategori
Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'products' => $category->products,
        'category' => $category->name,
    ]);
});

// midtrans routes
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

Route::get('services', [ProductController::class, 'index']);
Route::get('services/{product:slug}', [ProductController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::get('checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success')
        ->middleware('ensureUserRole:user');

    Route::get('checkout/{product:slug}', [CheckoutController::class, 'create'])
        ->name('checkout.create')
        ->middleware('ensureUserRole:user');

    Route::post('checkout/{product}', [CheckoutController::class, 'store'])
        ->name('checkout.store')
        ->middleware('ensureUserRole:user');

    // dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name(
        'dashboard'
    );

    // user dashboard
    Route::prefix('user/dashboard')
        ->namespace('User')
        ->name('user.')
        ->middleware('ensureUserRole:user')
        ->group(function () {
            Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
        });

    // admin dashboard
    Route::prefix('admin/dashboard')
        ->name('admin.')
        ->middleware('ensureUserRole:admin')
        ->group(function () {
            // admin dashboard
            Route::get('/', [AdminDashboard::class, 'index'])->name(
                'dashboard'
            );

            // admin checkout manage
            Route::resource('checkouts', AdminCheckout::class);

            // admin services manage
            Route::resource('services', AdminServices::class);

            // admin user manage
            Route::resource('users', AdminUser::class);

            // admin category manage
            Route::resource('categories', AdminCategory::class);

            // admin post manage
            Route::resource('posts', AdminPost::class);
        });
});

require __DIR__ . '/auth.php';
