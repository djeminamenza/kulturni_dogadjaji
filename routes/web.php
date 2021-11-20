<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TidingController;

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

Route::get('/', [UserController::class, 'oportalu']);
Route::get('oportalu', [UserController::class, 'oportalu']);
Route::get('dogadjaji', [UserController::class, 'dogadjaji']);
Route::get('vesti', [UserController::class, 'vesti']);
Route::get('ankete', [UserController::class, 'ankete']);
Route::get('pravilnik', [UserController::class, 'pravilnik']);

//Route::get('registracija',[UserController::class,'registracija']);

// Чак не мора ни да постоји функција у контролеру која враћа вју регистрација ?!

Route::view('/registracija', 'registracija');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/makeMeAnAdmin/{id}', [UserController::class, 'makeMeAnAdmin'])->name('make.Admin');
//Route::post('users/{id}','UserController@makeMeAnAdmin');
Route::get('/users', [UserController::class, 'getUsers'])->name('get.Users');
Route::get('/categories', [UserController::class, 'categories'])->name('a.categories');
Route::get('/reports', [UserController::class, 'reports'])->name('a.reports');
Route::get('/content', [UserController::class, 'content'])->name('a.content');
Route::get('/statistics', [UserController::class, 'statistics'])->name('a.statistics');
Route::get('deleting/content', [UserController::class, 'deletingContent'])->name('a.deletingcontent');
Route::get('deleting/events', [UserController::class, 'deletingEvents'])->name('a.deletingevents');
Route::get('deleting/adverts', [UserController::class, 'deletingAdverts'])->name('a.deletingadverts');
Route::get('deleting/news', [UserController::class, 'deletingNews'])->name('a.deletingnews');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dogadjaji', [EventController::class, 'showEvents'])->name('show.Events');
Route::get('/vesti', [TidingController::class, 'showTidings'])->name('show.Tidings');
