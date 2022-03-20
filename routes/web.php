<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PvcPanelController;
use App\Http\Controllers\WallpaperController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/catalog', [IndexController::class, 'catalog'])->name('catalog');

Route::get('/reviews', [IndexController::class, 'reviews'])->name('reviews');

Route::get('/product', [IndexController::class, 'product'])->name('product');
Route::get('/products', [IndexController::class, 'products'])->name('products');

Route::get('/cart', [IndexController::class, 'cart'])->name('cart');

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// dashboard routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //wallpapers
    Route::get('/dashboard/wallpapers', [WallpaperController::class, 'dashboard'])->name('wallpapersDashboard');
    Route::resource('wallpapers', WallpaperController::class);

    //pvc panels
    Route::resource('pvcPanels', PvcPanelController::class);
    Route::get('/dashboard/pvc-panels', [PvcPanelController::class, 'dashboard'])->name('pvsPanelsDashboard');
});
