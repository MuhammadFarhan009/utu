<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\UploadgambarController;

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
Route::get('/Data-gambar', [UploadgambarController::class, 'index'])->name('Data-gambar');
Route::get('/Create-gambar', [UploadgambarController::class, 'create'])->name('Create-gambar');
Route::post('/Simpan-gambar', [UploadgambarController::class, 'store'])->name('Simpan-gambar');


// Route::('/data_barang', [DataBarangController::class, 'index'])->name('databarang.index');
Route::resource("/data_barang", DataBarangController::class);
Route::post('/data_barang', [DataBarangController::class, 'store'])->name('data_barang.store');

Route::get('/', function () {
    return view('dshboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
