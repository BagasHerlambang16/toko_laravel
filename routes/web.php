<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/produk'); // redirect langsung ke halaman produk
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::resource('produk', ProdukController::class);
});

require __DIR__.'/auth.php';
