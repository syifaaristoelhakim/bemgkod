<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ObatController;
=======
>>>>>>> 93ec40fb9ce0bf162a9eda8c756b06cdd03c2c9a

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::prefix('dokter')->group (function(){
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dokter', [HomeController::class, 'dokter'])-> name('dokter');
=======
>>>>>>> 93ec40fb9ce0bf162a9eda8c756b06cdd03c2c9a
