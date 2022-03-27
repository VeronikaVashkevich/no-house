<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PvcPanelController;
use App\Http\Controllers\SinkController;
use App\Http\Controllers\TilesController;
use App\Http\Controllers\WallpaperController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//tiles routes
Route::get('/tiles', [TilesController::class, 'index'])->name('tiles.index');
Route::get('/tiles/{tile}', [TilesController::class, 'show'])->name('tiles.show');

//kitchen sinks routes
Route::get('/sinks', [SinkController::class, 'index'])->name('sinks.index');
Route::get('/sinks/{sink}', [SinkController::class, 'show'])->name('sinks.show');

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

    //tiles routes
    Route::get('/dashboard/tiles', [TilesController::class, 'dashboard'])->name('tilesDashboard');
    Route::get('/create/tile', [TilesController::class, 'create'])->name('tiles.create');
    Route::post('/store/tile', [TilesController::class, 'store'])->name('tiles.store');
    Route::get('/edit/tile/{tile}', [TilesController::class, 'edit'])->name('tiles.edit');
    Route::put('/update/tile/{tile}', [TilesController::class, 'update'])->name('tiles.update');
    Route::delete('/destroy/tile/{tile}', [TilesController::class, 'destroy'])->name('tiles.destroy');

    //sinks routes
    Route::get('/dashboard/sinks', [SinkController::class, 'dashboard'])->name('sinksDashboard');
    Route::get('/create/sink', [SinkController::class, 'create'])->name('sinks.create');
    Route::post('/store/sink', [SinkController::class, 'store'])->name('sinks.store');
    Route::get('/edit/sink/{sink}', [SinkController::class, 'edit'])->name('sinks.edit');
    Route::put('/update/sink/{sink}', [SinkController::class, 'update'])->name('sinks.update');
    Route::delete('/destroy/sink/{sink}', [SinkController::class, 'destroy'])->name('sinks.destroy');

});
