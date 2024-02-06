<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MusicController::class, 'index'])->name('music.index');
Route::get('/show/{id}', [MusicController::class, 'show'])->name('music.show');

Route::get('/upload', [MusicController::class, 'create'])->name('music.create');
Route::post('/store', [MusicController::class, 'store'])->name('music.store');