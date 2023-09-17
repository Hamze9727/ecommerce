<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);

Route::get('/collections/{category_slug}/{products_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewproducts']);

Route::middleware(['auth',])->group(function () {
    Route::get('wishlist', [App\Http\Controllers\Frontend\WishlistController::class, 'index']);
    Route::get('cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isadmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('/sliders', 'index');
        Route::get('/sliders/create', 'create');
        Route::post('/sliders/create', 'store');
        Route::get('/sliders/{slider}/edit', 'edit');
        Route::put('/sliders/{slider}', 'update');
        Route::get('/sliders/{slider}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\CategorgController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/Products', 'index');
        Route::get('/Products/create', 'create');
        Route::post('/Products', 'store');
        Route::get('/Products/{product}/edit', 'edit');
        Route::put('/Products/{product}', 'update');
        Route::get('/Products/{product_id}/delete', 'destroy');
        Route::get('/Product-image/{product_image_id}/delete', 'destroyImage');
        Route::post('/product-color/{prod_color_id}', 'UpdateprodcolorQty');
        Route::get('/product-color/{prod_color_id}/delete', 'deleteprodcolor');
    });

    //brand
    Route::get('/Brand', App\Http\Livewire\admin\Brand\Index::class);

    Route::controller(App\Http\Controllers\Admin\ColerController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors/create', 'store');
        Route::get('/colors/{color}/edit', 'edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('/colors/{color_id}/delete', 'destroy');
    });
});
