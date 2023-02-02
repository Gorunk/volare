<?php

use App\Http\Controllers\LoginController\LoginController;
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

/*Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

/*Route::get('/login', [UserController::class, 'index'])->name('login');*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})/*->middleware('auth')*/->name('login');

Route::post('/dashboard', [LoginController::class, 'login'])->middleware('auth')->name('dashboard');



Route::get('/dashboard', function () {
    return view('dashboard');
})/*->middleware('auth')*/->name('dashboard');

Route::get('/vuelos', function () {
    return view('vuelos');
})/*->middleware('auth')*/->name('vuelos');

Route::get('/ventas', function () {
    return view('ventas');
})/*->middleware('auth')*/->name('ventas');

Route::get('/users', function () {
    return view('users');
})/*->middleware('auth')*/->name('users');
