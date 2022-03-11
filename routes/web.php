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

Route::get('/', [\App\Http\Controllers\Client\ClientController::class, 'index'])->name('client.index');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
  Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
  Route::group(['prefix' => 'ages', 'as' => 'ages.'], function () {
    Route::get('/', [App\Http\Controllers\Dashboard\AgesController::class, 'index'])->name('index');
    Route::get('/data', [App\Http\Controllers\Dashboard\AgesController::class, 'data'])->name('data');
    Route::get('/create', [App\Http\Controllers\Dashboard\AgesController::class, 'create'])->name('create');
    Route::post('/create', [App\Http\Controllers\Dashboard\AgesController::class, 'store'])->name('store');
    Route::get('/{age}/edit', [App\Http\Controllers\Dashboard\AgesController::class, 'edit'])->name('edit');
    Route::put('/{age}/edit', [App\Http\Controllers\Dashboard\AgesController::class, 'update'])->name('update');
    Route::delete('/{age}/delete', [App\Http\Controllers\Dashboard\AgesController::class, 'delete'])->name('delete');
  });
});

Route::post('/upload-img', [App\Http\Controllers\Controller::class, 'uploadImg']);