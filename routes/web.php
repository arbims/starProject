<?php

use App\Http\Controllers\Admin\StarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// route partie front
Route::get('/', HomeController::class)->name('home');

// liste des route pour l'authentification
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// routes administrations
Route::prefix('admin')->name('admin')->middleware('auth')->group(function () {
    Route::resource('star', StarController::class);
});