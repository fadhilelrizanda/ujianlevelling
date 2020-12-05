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
    return view('posts.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editlist', [App\Http\Controllers\HomeController::class, 'editlisting']);

use App\Http\Controllers\pkmController;

Route::resource('posts', pkmController::class);

Route::get('/list', [App\Http\Controllers\pkmController::class, 'listing']);

Route::get('/editinglist', [App\Http\Controllers\pkmController::class, 'editlist'])->name('editinglist');
