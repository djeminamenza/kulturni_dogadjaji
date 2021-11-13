<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[UserController::class,'oportalu']);
Route::get('oportalu',[UserController::class,'oportalu']);
Route::get('pregled',[UserController::class,'pregled']);
Route::get('vesti',[UserController::class,'vesti']);
Route::get('ankete',[UserController::class,'ankete']);
Route::get('pravilnik',[UserController::class,'pravilnik']);

//Route::get('registracija',[UserController::class,'registracija']);

// Чак не мора ни да постоји функција у контролеру која враћа вју регистрација ?!

Route::view('/registracija', 'registracija');

