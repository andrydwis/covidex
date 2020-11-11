<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\InitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InitController::class, 'main'])->name('main');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [InitController::class, 'profile'])->name('profile');

    Route::get('setting', [InitController::class, 'setting'])->name('setting');
    Route::prefix('setting')->group(function () {
        Route::get('profile', [InitController::class, 'editProfile'])->name('editProfile');
        Route::get('password', [InitController::class, 'editPassword'])->name('editPassword');
    });

    Route::get('global', [ClientController::class, 'global'])->name('global');
    Route::get('local', [ClientController::class, 'local'])->name('local');
});
