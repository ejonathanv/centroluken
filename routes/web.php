<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/header-2', [WebsiteController::class, 'header2'])->name('header2');
Route::get('/quienes-somos', [WebsiteController::class, 'about'])->name('about');
Route::get('/quienes-somos/{member}', [WebsiteController::class, 'member'])->name('member');
Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contacto', [WebsiteController::class, 'send'])->name('send-message');
Route::view('/biografias', 'website.members');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
