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
    return view('carausel/index');
});

Route::get('/inbox', function () {
    return view('carausel/inbox');
});
Route::get('/keluar', function () {
    return view('carausel/keluar');
});

Route::get('/agenda_masuk', function () {
    return view('carausel/agenda_masuk');
});
Route::get('/agenda_keluar', function () {
    return view('carausel/agenda_keluar');
});
Route::get('/g_keluar', function () {
    return view('carausel/g_keluar');
});
Route::get('/g_masuk', function () {
    return view('carausel/g_masuk');
});
