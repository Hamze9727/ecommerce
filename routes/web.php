<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/collections', 'categories');
    Route::get('/collections/{category_slug}',  'products');
    Route::get('/collections/{category_slug}/{products_slug}', 'viewproducts');
    Route::get('/new-arrivals', 'newArrivals');
    Route::get('/Featured', 'FeaturedProducts');
});


Route::middleware(['auth',])->group(function () {
    Route::get('wishlist', [App\Http\Controllers\Frontend\WishlistController::class, 'index']);
    Route::get('cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
    Route::get('ckeckOut', [App\Http\Controllers\Frontend\ckeckOutController::class, 'index']);
    Route::get('orders', [App\Http\Controllers\Frontend\orderController::class, 'index']);
    Route::get('orders/{orderId}', [App\Http\Controllers\Frontend\orderController::class, 'show']);
});

Route::get('thank-you', [App\Http\Controllers\Frontend\FrontendController::class, 'thankyou']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isadmin'])->group(function () {
    //dashboard
    Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);

    //setting
    Route::get('setting', [App\Http\Controllers\admin\SettingController::class, 'index']);
    Route::post('setting', [App\Http\Controllers\admin\SettingController::class, 'store']);


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
    Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/{orderId}', 'show');
        Route::put('/orders/{orderId}', 'UpdateOrderStatus');
        Route::get('/invoice/{orderId}', 'viewOrderinvoice');
        Route::get('/invoice/{orderId}/generate', 'generateinvoice');
    });
});
