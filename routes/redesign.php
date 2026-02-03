<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redesign\WebsiteController;

// Rutas para sitio web 2026
Route::get('/', [
    WebsiteController::class, 'index'
])->name('redesign.home');

Route::get('/filosofia', [
    WebsiteController::class, 'philosophy'
])->name('redesign.philosophy');

Route::get('socio-fundador/{nombre}', [
    WebsiteController::class, 'founder'
])->name('founder');

Route::get('/origen', [
    WebsiteController::class, 'origin'
])->name('redesign.origin');

Route::get('/equipo', [
    WebsiteController::class, 'team'
])->name('redesign.team');

Route::redirect('/materiales', '/materiales/estudios')
->name('redesign.materials');

Route::get('/materiales/estudios', [
    WebsiteController::class, 'studies'
])->name('redesign.studies');

Route::get('/materiales/recursos', [
    WebsiteController::class, 'resources'
])->name('redesign.resources');

Route::get('/alianzas', [
    WebsiteController::class, 'partnerships'
])->name('redesign.partnerships');

Route::get('/contacto', [
    WebsiteController::class, 'contact'
])->name('redesign.contact');
