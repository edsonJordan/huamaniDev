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
/* Rutas para paginas */
Route::get('/', [PageController::class, 'portfolio'])->name('home');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
