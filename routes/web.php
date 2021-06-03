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

//Tutorial Video
Route::get('Home.Home/', function () {
  return view('Home.Home');
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


//Forum routes
Route::get('/new-topic', function () {
  return view('client.new-topic');
});
Route::get('/forum', function () {
  return view('forum');
});
Route::get('/category/overview/{id}', 'App\Http\Controllers\forum\FrontEndController@categoryOverview')->name('category.overview');

Route::get('/forum/overview/{id}', 'App\Http\Controllers\forum\FrontEndController@forumOverview')->name('forum.overview');

Route::middleware(['auth', 'admin'])->group(function(){
route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');
route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');

route::get('dashboard/category/new', 'App\Http\Controllers\forum\CategoryController@create')->name('category.new');
route::post('dashboard/category/new', 'App\Http\Controllers\forum\CategoryController@store')->name('category.store');
route::get('dashboard/categories', 'App\Http\Controllers\forum\CategoryController@index')->name('categories');

route::get('dashboard/categories/{id}', 'App\Http\Controllers\forum\CategoryController@show')->name('category');

route::get('dashboard/categories/edit/{id}', 'App\Http\Controllers\forum\CategoryController@edit')->name('category.edit');
route::post('dashboard/categories/edit/{id}', 'App\Http\Controllers\forum\CategoryController@update')->name('category.update');
route::get('dashboard/categories/delete/{id}', 'App\Http\Controllers\forum\CategoryController@destroy')->name('category.destroy');

route::get('dashboard/forums/edit/{id}', 'App\Http\Controllers\forum\ForumController@edit')->name('forum.edit');
route::post('dashboard/forums/edit/{id}', 'App\Http\Controllers\forum\ForumController@update')->name('forum.update');
route::get('dashboard/forums/delete/{id}', 'App\Http\Controllers\forum\ForumController@destroy')->name('forum.destroy');
});

route::get('client/forum/new', 'App\Http\Controllers\forum\ForumController@create')->name('forum.new');
route::post('client/forum/new', 'App\Http\Controllers\forum\ForumController@store')->name('forum.store');
route::get('client/forums', 'App\Http\Controllers\forum\ForumController@index')->name('forums');

route::get('client/forums/{id}', 'App\Http\forum\Controllers\ForumController@show')->name('forum');

// Topics
route::get('client/discussion/new/{id}', 'App\Http\Controllers\forum\DiscussionController@create')->name('discussion.new');
route::post('client/discussion/new', 'App\Http\Controllers\forum\DiscussionController@store')->name('discussion.store');
route::get('client/discussion/{id}', 'App\Http\Controllers\forum\DiscussionController@show')->name('discussion');
route::post('client/discussion/reply/{id}', 'App\Http\forum\Controllers\DiscussionController@reply')->name('discussion.reply');
route::get('client/discussion/reply/delete/{id}', 'App\Http\forum\Controllers\DiscussionController@destroy')->name('reply.delete');
