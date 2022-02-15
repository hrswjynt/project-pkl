<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisPeralatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;

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

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegistrationController::class, 'create'])->name('register');
    Route::post('/register', [RegistrationController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/peralatan', [JenisPeralatanController::class, 'show']);
    Route::get('/peralatan/add', [JenisPeralatanController::class, 'showAddForm'])->name('add.peralatan');
    Route::post('/peralatan/add', [JenisPeralatanController::class, 'submitAddForm']);
    Route::get('/peralatan/edit/{id}', [JenisPeralatanController::class, 'showEditForm']);
    Route::patch('/peralatan/edit/', [JenisPeralatanController::class, 'submitEditForm'])->name('edit.peralatan');
    Route::delete('/peralatan/{id}', [JenisPeralatanController::class, 'destroy']);

    Route::get('logout', [LogoutController::class, 'index']);
});
