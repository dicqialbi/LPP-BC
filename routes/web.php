<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SuratController;
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
    return view('pegawai.index');
});

// admin
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/dashboard', function () {
    return view('admin.index');
});
Route::get('/admin/data', function () {
    return view('admin.data');
});
Route::get('/admin/viewdata', function () {
    return view('admin.viewdata');
});
Route::get('/admin/viewpdfdata', function () {
    return view('admin.viewpdfdata');
});
Route::get('/admin/users', function () {
    return view('admin.users');
});


// kepala
Route::get('/kepala/login', function () {
    return view('kepala.login');
});
Route::get('/kepala/dashboard', function () {
    return view('kepala.index');
});
//
Route::get('/kepala/data', function () {
    return view('kepala.data');
});
Route::get('/kepala/viewdata', function () {
    return view('kepala.viewdata');
});
Route::get('/kepala/validasi', function () {
    return view('kepala.validasi');
});
Route::get('/kepala/viewpdfdata', function () {
    return view('kepala.viewpdfdata');
});

Route::get('/generate-qrcode', [App\Http\Controllers\QrCodeController::class, 'index']);


// pegawai
Route::get('/pegawai/login', function () {
    return view('pegawai.login');
});
Route::get('/pegawai/dashboard', function () {
    return view('pegawai.index');
});
Route::get('/pegawai/formdata', function () {
    return view('pegawai.formdata');
});
Route::get('/pegawai/data', function () {
    return view('pegawai.data');
});
Route::get('/pegawai/viewdata', function () {
    return view('pegawai.viewdata');
});
Route::get('/pegawai/viewpdfdata', function () {
    return view('pegawai.viewpdfdata');
});



// tes


// COBA CETAK
Route::get('/pegawai/export-surat',[App\Http\Controllers\ExportPDFController::class, 'cetakPdf']);