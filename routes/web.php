<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;

// We need to set a route to define the locale we want to use. 
Route::get('/setlocale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('set-locale');

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/header-2', [WebsiteController::class, 'header2'])->name('header2');
Route::get('/quienes-somos', [WebsiteController::class, 'about'])->name('about');
Route::get('/quienes-somos/{member}', [WebsiteController::class, 'member'])->name('member');
Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contacto', [WebsiteController::class, 'send'])->name('send-message');

Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/blog/{article:slug}', [WebsiteController::class, 'article'])->name('article');
Route::get('/temas-de-interes', [WebsiteController::class, 'topics'])->name('topics');
Route::get('/temas-de-interes/{category}', [WebsiteController::class, 'topicCategory'])->name('topicCategory');
Route::view('/biografias', 'website.members');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'verified']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('articles', ArticleController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
