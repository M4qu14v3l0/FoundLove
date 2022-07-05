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
p
*/

Route::get('/', function () {
    return view('app');
});


Route::get('/welcome/{phone}', [App\Http\Controllers\ApiController::class, 'messageApi']);
Route::get('/card_layout', [App\Http\Controllers\CardController::class, 'index'])-> name('cardLayout');
Route::get('/settings_layout', [App\Http\Controllers\SettingsController::class, 'index'])-> name('settingsLayout');
Route::get('/crud', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/crud/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/crud/insert', [App\Http\Controllers\UserController::class, 'insert']);
Route::get('/crud/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/crud/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

Route::get('/crud/{id}/delete', [App\Http\Controllers\UserController::class, 'delete']);

Route::get('/crud/export', [App\Http\Controllers\UserController::class, 'export']);
Route::get('/crud/exportPDF', [App\Http\Controllers\UserController::class, 'exportPDF']);

Route::get('/users/age', [App\Http\Controllers\DataController::class, 'extractAge']);

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);
