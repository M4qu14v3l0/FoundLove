<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/crud', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/crud/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/crud/insert', [App\Http\Controllers\UserController::class, 'insert']);
Route::get('/crud/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/crud/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/crud/{id}/delete', [App\Http\Controllers\UserController::class, 'delete']);
