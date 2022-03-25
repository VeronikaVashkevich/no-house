<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoorController;
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

//wallpapers
Route::get('/wallpapers', [WallpaperController::class, 'index'])->name('wallpapers.index');
Route::get('/wallpapers/{wallpaper}', [WallpaperController::class, 'show'])->name('wallpapers.show');

//pvc panels
Route::get('/pvc-panels', [PvcPanelController::class, 'index'])->name('pvcPanels.index');
Route::get('/pvc-panels/{pvcPanel}', [PvcPanelController::class, 'show'])->name('pvcPanels.show');

//doors routes
Route::get('/doors', [DoorController::class, 'index'])->name('doors.index');
Route::get('/doors/{door}', [DoorController::class, 'show'])->name('doors.show');

// dashboard routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //wallpapers
    Route::get('/dashboard/wallpapers', [WallpaperController::class, 'dashboard'])->name('wallpapersDashboard');
    Route::resource('wallpapers', WallpaperController::class)->except([
        'index', 'show'
    ]);

    //pvc panels
    Route::get('/dashboard/pvc-panels', [PvcPanelController::class, 'dashboard'])->name('pvsPanelsDashboard');
    Route::resource('pvcPanels', PvcPanelController::class)->except([
        'index', 'show'
    ]);

    //door routes
    Route::get('/dashboard/doors', [DoorController::class, 'dashboard'])->name('doorsDashboard');
//    Route::resource('doors', DoorController::class)->except([
//        'index', 'show'
//    ]);

    //troubles with resource controller
    Route::get('/create/door', [DoorController::class, 'create'])->name('doors.create');
    Route::post('/store/door', [DoorController::class, 'store'])->name('doors.store');
    Route::get('/edit/door/{door}', [DoorController::class, 'edit'])->name('doors.edit');
    Route::put('/update/door/{door}', [DoorController::class, 'update'])->name('doors.update');
    Route::delete('/destroy/door/{door}', [DoorController::class, 'destroy'])->name('doors.destroy');

});
