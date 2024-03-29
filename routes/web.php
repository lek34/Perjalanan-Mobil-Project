<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Master\ArmadaController;
use App\Http\Controllers\Admin\Master\SparepartController;
use App\Http\Controllers\Admin\Transaksi\PemakaianSparepartController;
use App\Http\Controllers\Admin\Transaksi\PembelianController;
use App\Http\Controllers\Admin\Transaksi\TransaksiController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ArmadaController::class)->middleware('auth')->prefix('admin/master/armada')->name('admin.master.armada.')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
    Route::get('/restore/{id}', 'restore')->name('restore');
});

Route::controller(SparepartController::class)->middleware('auth')->prefix('admin/master/sparepart')->name('admin.master.sparepart.')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
    Route::get('/restore/{id}', 'restore')->name('restore');
});

Route::controller(PembelianController::class)->middleware('auth')->prefix('admin/transaksi/pembelian')->name('admin.transaksi.pembelian.')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
    Route::get('/restore/{id}', 'restore')->name('restore');
});

Route::controller(PemakaianSparepartController::class)->middleware('auth')->prefix('admin/transaksi/pemakaian')->name('admin.transaksi.pemakaian.')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create/{id}','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
    Route::get('/restore/{id}', 'restore')->name('restore');
});

Route::controller(TransaksiController::class)->middleware('auth')->prefix('admin/transaksi/transaksi')->name('admin.transaksi.transaksi.')->group(function(){
    Route::get('/index/{id}', 'index')->name('index');
    Route::get('/create/{id}','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
    Route::get('/restore/{id}', 'restore')->name('restore');
});



require __DIR__.'/auth.php';
