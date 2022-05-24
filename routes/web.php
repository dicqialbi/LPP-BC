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

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/qrcode', function () {
    return view('dashboard.index');
});
Route::get('/form', function () {
    return view('template.form');
});
Route::get('/data', function () {
    return view('template.data');
});
Route::get('/edit', function () {
    return view('data-tangkapan.edit');
});