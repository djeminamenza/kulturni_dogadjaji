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
    return view('oportalu');
});
Route::get('/ankete', function () {
    return view('ankete');
});
Route::get('/pregled', function () {
    return view('pregled');
});
Route::get('/pravilnik', function () {
    return view('pravilnik');
});
Route::get('/registracija', function () {
    return view('registracija');
});
Route::get('/vesti', function () {
    return view('vesti');
});

