<?php

use App\Http\Controllers\MusicController;
use App\Models\Music;
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
Route::get('/{$id}', [MusicController::class, 'show'])->name('music.show');
