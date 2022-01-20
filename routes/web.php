<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TidingController;
use Illuminate\Support\Facades\Auth;

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
Route::view('/prijava', 'prijava');


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
//Route::get('deleting/news', [UserController::class, 'deletingNews'])->name('a.deletingnews');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dogadjaji', [EventController::class, 'showEvents'])->name('show.Events');
Route::get('/vesti', [TidingController::class, 'showTidings'])->name('show.Tidings');//->middleware('is_admin');
Route::get('user/addTiding', [TidingController::class, 'addnewTiding'])->name('add.new.Tiding');
Route::post('/', [TidingController::class, 'store'])->name('add.Tiding');

Route::get('/{id}', [TidingController::class, 'removeTiding_request'])->name('remove.Tiding.request');
Route::get('/deleting/news', [TidingController::class, 'show_remove_requests'])->name('a.deletingnews');
Route::get('/deleting/news/{id}', [TidingController::class, 'removeTiding'])->name('remove.Tiding');

Route::get('organization/add_ads', [OrganizationController::class, 'add_ads'])->name('a.add_ads');
Route::get('organization/add_events', [OrganizationController::class, 'add_event'])->name('a.add_event');
Route::get('organization/profile', [OrganizationController::class, 'profile'])->name('a.profile');
Route::get('organization/survey', [OrganizationController::class, 'survey'])->name('a.survey');
Route::get('organization/survey_result', [OrganizationController::class, 'survey_result'])->name('a.survey_result');
Route::get('organization/home', [OrganizationController::class, 'home'])->name('a.home');
