<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/how', function () {
    return view('how');
})->name('how');

Route::get('/create', function () {
    return view('checkout.create');
})->name('create');

Route::get('/checkout-successs', function () {
    return view('checkout.checkout-successs');
})->name('checkout-successs');

Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/products/{product:slug}', [ProductController::class, 'show']);


Route::get('/categories', function() {
    return view('/categories', [
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('/category', [
        'products' => $category->products,
        'category' => $category->name
    ]);
});
