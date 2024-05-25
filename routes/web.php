<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuplierController;
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

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('home', function () {
        return view('dashboard');
    })->name('home');

    // Route::get('home', [DashboardController::class, 'index'])->name('home');

    //apoteker route
    Route::resource('employee', EmployeeController::class);
    //pelanggan
    Route::resource('pelanggan', PelangganController::class);
    // Route::resource('category', CategoryController::class);
    // Route::resource('product', ProductController::class);

    //studi kasus
    Route::resource('suplier', SuplierController::class);
    Route::resource('obat', ObatController::class);

    // Tambahkan route untuk penjualan
    Route::get('penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');
    Route::post('penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
    Route::get('penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
});
