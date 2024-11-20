<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('Auth/login');
})->name('login');
Route::get('/register', function () {
    return view('Auth/register');
})->name('register');
Route::get('/Polri', function () {
    return view('Pages/Polri');
})->name('Polri');
Route::get('/Tambahdata', function () {
    return view('Pages/Tambahdata');
})->name('Tambahdata');
Route::get('/Lihatdata', function () {
    return view('Pages/Lihatdata');
})->name('Lihatdata');
Route::get('/Editdata', function () {
    return view('Pages/Editdata');
})->name('Editdata');
Route::get('/logout', function () {
    return view('Pages/logout');
})->name('logout');