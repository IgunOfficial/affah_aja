<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahunController;


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

// route admin
Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
    Route::resource('tahun', TahunController::class);
});

Route::get('/errors', function () {
    return view('errors.403');
});