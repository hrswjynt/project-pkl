<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarPeralatan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\JenisPeralatanController;
use App\Http\Controllers\DaftarPeralatanController;

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

    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    Route::get('/register', [RegistrationController::class, 'create'])->name('register');
    Route::post('/register', [RegistrationController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/daftar-alat', [DaftarPeralatanController::class, 'index']);

    Route::get('/peralatan', [JenisPeralatanController::class, 'data']);
    Route::get('/peralatan/add', [JenisPeralatanController::class, 'add']);
    Route::post('/peralatan', [JenisPeralatanController::class, 'addProcess']);
    Route::delete('/peralatan/{id}', [JenisPeralatanController::class, 'destroy']);
    Route::get('/peralatan/edit/{id}', [JenisPeralatanController::class, 'edit']);
    Route::patch('peralatan/{id}', [JenisPeralatanController::class, 'editProcess']);
    Route::delete('daftar-peralatan/{id}', [DaftarPeralatanController::class, 'destroy']);
    Route::get('daftar-peralatan', [DaftarPeralatanController::class, 'createView']);
    Route::post('daftar-peralatan/add', [DaftarPeralatanController::class, 'create']);
    Route::get('daftar-peralatan/edit/{id}', [DaftarPeralatanController::class, 'editView']);
    Route::post('daftar-peralatan/editData/{id}', [DaftarPeralatanController::class, 'edit']);

    Route::get('logout', [LogoutController::class, 'index']);
});
