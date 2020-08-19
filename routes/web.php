<?php

use App\Http\Controllers\AuthController;
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
    return view('index');
})->name('index');

// ---

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/agree', function () {
    return view('agree');
})->name('agree');

// ---

Route::get('/picture-select', function () {
    return view('index');
})->name('picture-select');


Route::get('/about', function () {
    return view('index');
})->name('about');

// ---
Route::post('/signin', 'AuthController@SignIn')->name('SignIn');
