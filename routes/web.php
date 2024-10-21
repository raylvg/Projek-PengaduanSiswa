<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route khusus untuk role "siswa"
Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    // Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::resource('siswa', controller: SiswaController::class);

    // Tambahkan route lain khusus siswa di sini
});


// Route khusus untuk role "guru"
Route::group(['middleware' => ['auth', 'role:guru']], function () {
    Route::get('/guru/index', [GuruController::class, 'index'])->name('guru.index');
    // Tambahkan route lain khusus guru di sini
    Route::resource('guru', controller: GuruController::class);

});


// Auth routes

require __DIR__.'/auth.php';
