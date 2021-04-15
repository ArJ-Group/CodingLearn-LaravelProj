<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request; 

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
});
Route::get('/index', function () {
  return view('index');
});
//Route::get('mahasiswa/cari/', [MahasiswaController::class,'search']);
//Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/htm', function () {
    return view('htm');
});
Route::get('/c', function () {
  return view('c');
});
Route::get('/cplus', function () {
  return view('cplus');
});
Route::get('/css', function () {
  return view('css');
});
Route::get('/java', function () {
  return view('java');
});
Route::get('/j', function () {
  return view('j');
});
Route::get('/ph', function () {
  return view('ph');
});
Route::get('/php', function () {
  return view('php');
});
Route::get('html.welcomehtml/', function () {
  return view('html.welcomehtml');
});
Route::get('html.htmlapi/', function () {
  return view('html.htmlapi');
});
Route::get('html.htmlexamp/', function () {
  return view('html.htmlexamp');
});
Route::get('html.htmlform/', function () {
  return view('html.htmlform');
});
Route::get('html.htmlgrapic/', function () {
  return view('html.htmlgrapic');
});
Route::get('html.htmltutor/', function () {
  return view('html.htmltutor');
});
Route::get('html.htmlreferences/', function () {
  return view('html.htmlreferences');
});
Route::get('html.htmlmedia/', function () {
  return view('html.htmlmedia');
});


Route::get('/users', function ($id) {
    return view('users');
});
//Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
//Route::get('/search', 'MahasiswaController@search')->name('mahasiswa.search');

//Route::get('/about-us', function () {
  //  return view('about-us');
//});
//Route::get('/category', function () {
  //  return view('category');
//});
//Route::get('/dinning', function () {
 //   return view('dinning');
//});
//Route::get('/news', function () {
  //  return view('news');
//});
/*
Route::get('/news', function () {
    return view('news');
});
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
