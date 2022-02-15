<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisPeralatanController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('home', function () {
    return view('home');
});

Route::get('/peralatan', [JenisPeralatanController::class, 'data']);
Route::get('/peralatan/add', [JenisPeralatanController::class, 'add']);
Route::post('/peralatan', [JenisPeralatanController::class, 'addProcess']);
Route::get('/peralatan/edit/{id}', [JenisPeralatanController::class, 'edit']);
Route::patch('peralatan/{id}', [JenisPeralatanController::class, 'editProcess']);
Route::delete('peralatan/{id}', [JenisPeralatanController::class, 'delete']);