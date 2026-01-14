<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redesign\WebsiteController;

// Rutas para sitio web 2026
Route::get('/', [
    WebsiteController::class, 'index'
])->name('redesign.home');