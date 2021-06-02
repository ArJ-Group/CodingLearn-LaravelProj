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
Route::get('/users', function ($id) {
  return view('users');
});

Route::get('/', function () {
  return view('Auth.landing');
});
Route::get('/index', function () {
  return view('index');
});
Route::get('forum2/', function () {
  return view('forum2');
});
Route::get('/edit', function () {
  return view('edit');
});
Route::get('/compiler', function () {
  return view('compiler');
});
Route::get('/Run', function () {
  return view('Run');
});
Route::get('mahasiswa/cari/', [MahasiswaController::class,'search']);
Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/htm', function () {
    return view('htm');
});
Route::get('/sql', function () {
  return view('sql');
});
Route::get('/cplus', function () {
  return view('cplus');
});
Route::get('/cs', function () {
  return view('cs');
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

//HTML
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
Route::get('html.htmledit/', function () {
  return view('html.htmledit');
});
//CSS
Route::get('css.cssadvanced/', function () {
  return view('css.cssadvanced');
});
Route::get('css.cssexm/', function () {
  return view('css.cssexm');
});
Route::get('css.cssgrid/', function () {
  return view('css.cssgrid');
});
Route::get('css.cssreferences/', function () {
  return view('css.cssreferences');
});
Route::get('css.cssreferences/', function () {
  return view('css.cssreferences');
});
Route::get('css.csstutor/', function () {
  return view('css.csstutor');
});
Route::get('css.welcomecss/', function () {
  return view('css.welcomecss');
});
Route::get('css.cssresponsive/', function () {
  return view('css.cssresponsive');
});

//JAVA
Route::get('java.welcomejava/', function () {
  return view('java.welcomejava');
});
Route::get('java.javatutor/', function () {
  return view('java.javatutor');
});
Route::get('java.javamethod/', function () {
  return view('java.javamethod');
});
Route::get('java.javaclasses/', function () {
  return view('java.javaclasses');
});
Route::get('java.javaexample/', function () {
  return view('java.javaexample');
});
Route::get('java.javafile/', function () {
  return view('java.javafile');
});
Route::get('java.javareferences/', function () {
  return view('java.javareferences');
});
Route::get('java.javaexer/', function () {
  return view('java.javaexer');
});

//SQL
Route::get('sql.sqltutor/', function () {
  return view('sql.sqltutor');
});
Route::get('sql.sqltutor1/', function () {
  return view('sql.sqltutor1');
});
Route::get('sql.sqldb/', function () {
  return view('sql.sqldb');
});
Route::get('sql.sqlrefer/', function () {
  return view('sql.sqlrefer');
});
Route::get('cplus.cplusexample/', function () {
  return view('cplus.cplusexample');
});
Route::get('cplus.cplusexer/', function () {
  return view('cplus.cplusexer');
});
Route::get('cplus.cplusfunc/', function () {
  return view('cplus.cplusfunc');
});
Route::get('cplus.cplustutor/', function () {
  return view('cplus.cplustutor');
});
//C++
Route::get('cplus.welcomecp/', function () {
  return view('cplus.welcomecp');
});
Route::get('cplus.cplusclasses/', function () {
  return view('cplus.cplusclasses');
});
Route::get('cplus.cplusexample/', function () {
  return view('cplus.cplusexample');
});
Route::get('cplus.cplusexer/', function () {
  return view('cplus.cplusexer');
});
Route::get('cplus.cplusfunc/', function () {
  return view('cplus.cplusfunc');
});
Route::get('cplus.cplustutor/', function () {
  return view('cplus.cplustutor');
});

//compiler
Route::get('compiler.java.javacom/', function () {
  return view('compiler.java..javacom');
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
