<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\spController;
use App\Http\Controllers\posController;
use App\Http\Controllers\landingController;

Route::get('/', function () {
    return view('/landing');
});

// Route::get('/hello', [dashbordController::class, 'hello'])->name('alam');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/sp', [spController::class, 'index'])->name('sp');

Route::get('/pos', [posController::class, 'index'])->name('pos');

Route::get('/landing', [landingController::class, 'index'])->name('landing');

Route::get('/sitemap.xml', function () {
    $path = public_path('public/sitemap.xml'); // Sesuaikan dengan path ke file sitemap.xml Anda
    return response()->file($path);
})->name('sitemap');

