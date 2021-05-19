<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Aqui escribira su codigo un futuro maldito de laravel
|--------------------------------------------------------------------------
|
| Eres un campeón ¡¡¡
| No te rindas sigue solo falta poco¡¡¡¡
| Quieres ser un programador o no ?? sigue escribiendo codigo carajo ¡¡¡
|
*/
/* Ruta para el portafolio */
/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
