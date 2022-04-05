<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BathController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LaminateController;
use App\Http\Controllers\LinoleumController;
use App\Http\Controllers\MixerController;
use App\Http\Controllers\ParquetController;
use App\Http\Controllers\PvcPanelController;
use App\Http\Controllers\SinkController;
use App\Http\Controllers\TilesController;
use App\Http\Controllers\WallpaperController;
use App\Http\Controllers\PaintController;
use App\Http\Controllers\VarnishController;
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

//bath routes
Route::get('/baths', [BathController::class, 'index'])->name('baths.index');
Route::get('/baths/{bath}', [BathController::class, 'show'])->name('baths.show');

//mixers routes
Route::get('/mixers', [MixerController::class, 'index'])->name('mixers.index');
Route::get('/mixers/{mixer}', [MixerController::class, 'show'])->name('mixers.show');

//laminate routes
Route::get('/laminate', [LaminateController::class, 'index'])->name('laminate.index');
Route::get('/laminate/{laminate}', [LaminateController::class, 'show'])->name('laminate.show');

//linoleum routes
Route::get('/linoleum', [LinoleumController::class, 'index'])->name('linoleum.index');
Route::get('/linoleum/{linoleum}', [LinoleumController::class, 'show'])->name('linoleum.show');

//parquet routes
Route::get('/parquet', [ParquetController::class, 'index'])->name('parquet.index');
Route::get('/parquet/{parquet}', [ParquetController::class, 'show'])->name('parquet.show');

//paint routes
Route::get('/paint', [PaintController::class, 'index'])->name('paint.index');
Route::get('/paint/{paint}', [PaintController::class, 'show'])->name('paint.show');

//varnishes routes
Route::get('/varnishes', [VarnishController::class, 'index'])->name('varnishes.index');
Route::get('/varnishes/{varnish}', [VarnishController::class, 'show'])->name('varnishes.show');

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

    //baths routes
    Route::get('/dashboard/baths', [BathController::class, 'dashboard'])->name('bathsDashboard');
    Route::get('/create/bath', [BathController::class, 'create'])->name('baths.create');
    Route::post('/store/bath', [BathController::class, 'store'])->name('baths.store');
    Route::get('/edit/bath/{bath}', [BathController::class, 'edit'])->name('baths.edit');
    Route::put('/update/bath/{bath}', [BathController::class, 'update'])->name('baths.update');
    Route::delete('/destroy/bath/{bath}', [BathController::class, 'destroy'])->name('baths.destroy');

    //mixers routes
    Route::get('/dashboard/mixers', [MixerController::class, 'dashboard'])->name('mixersDashboard');
    Route::get('/create/mixer', [MixerController::class, 'create'])->name('mixers.create');
    Route::post('/store/mixer', [MixerController::class, 'store'])->name('mixers.store');
    Route::get('/edit/mixer/{mixer}', [MixerController::class, 'edit'])->name('mixers.edit');
    Route::put('/update/mixer/{mixer}', [MixerController::class, 'update'])->name('mixers.update');
    Route::delete('/destroy/mixer/{mixer}', [MixerController::class, 'destroy'])->name('mixers.destroy');

    //laminate routes
    Route::get('/dashboard/laminate', [LaminateController::class, 'dashboard'])->name('laminateDashboard');
    Route::get('/create/laminate', [LaminateController::class, 'create'])->name('laminate.create');
    Route::post('/store/laminate', [LaminateController::class, 'store'])->name('laminate.store');
    Route::get('/edit/laminate/{laminate}', [LaminateController::class, 'edit'])->name('laminate.edit');
    Route::put('/update/laminate/{laminate}', [LaminateController::class, 'update'])->name('laminate.update');
    Route::delete('/destroy/laminate/{laminate}', [LaminateController::class, 'destroy'])->name('laminate.destroy');

    //linoleum routes
    Route::get('/dashboard/linoleum', [LinoleumController::class, 'dashboard'])->name('linoleumDashboard');
    Route::get('/create/linoleum', [LinoleumController::class, 'create'])->name('linoleum.create');
    Route::post('/store/linoleum', [LinoleumController::class, 'store'])->name('linoleum.store');
    Route::get('/edit/linoleum/{linoleum}', [LinoleumController::class, 'edit'])->name('linoleum.edit');
    Route::put('/update/linoleum/{linoleum}', [LinoleumController::class, 'update'])->name('linoleum.update');
    Route::delete('/destroy/linoleum/{linoleum}', [LinoleumController::class, 'destroy'])->name('linoleum.destroy');

    //parquet routes
    Route::get('/dashboard/parquet', [ParquetController::class, 'dashboard'])->name('parquetDashboard');
    Route::get('/create/parquet', [ParquetController::class, 'create'])->name('parquet.create');
    Route::post('/store/parquet', [ParquetController::class, 'store'])->name('parquet.store');
    Route::get('/edit/parquet/{parquet}', [ParquetController::class, 'edit'])->name('parquet.edit');
    Route::put('/update/parquet/{parquet}', [ParquetController::class, 'update'])->name('parquet.update');
    Route::delete('/destroy/parquet/{parquet}', [ParquetController::class, 'destroy'])->name('parquet.destroy');

    //paint routes
    Route::get('/dashboard/paint', [PaintController::class, 'dashboard'])->name('paintDashboard');
    Route::get('/create/paint', [PaintController::class, 'create'])->name('paint.create');
    Route::post('/store/paint', [PaintController::class, 'store'])->name('paint.store');
    Route::get('/edit/paint/{paint}', [PaintController::class, 'edit'])->name('paint.edit');
    Route::put('/update/paint/{paint}', [PaintController::class, 'update'])->name('paint.update');
    Route::delete('/destroy/paint/{paint}', [PaintController::class, 'destroy'])->name('paint.destroy');

    //varnishes routes
    Route::get('/dashboard/varnishes', [VarnishController::class, 'dashboard'])->name('varnishesDashboard');
    Route::get('/create/varnishes', [VarnishController::class, 'create'])->name('varnishes.create');
    Route::post('/store/varnishes', [VarnishController::class, 'store'])->name('varnishes.store');
    Route::get('/edit/varnishes/{varnish}', [VarnishController::class, 'edit'])->name('varnishes.edit');
    Route::put('/update/varnishes/{varnish}', [VarnishController::class, 'update'])->name('varnishes.update');
    Route::delete('/destroy/varnishes/{varnish}', [VarnishController::class, 'destroy'])->name('varnishes.destroy');

});
