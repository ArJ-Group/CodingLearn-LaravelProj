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

//aplud
Route::get('/app_upload','AppUploadController@index');

Route::post('/app_upload/upload','AppUploadController@upload')->name('upload');

Route::get('/view_apps','AppUploadController@show');

Route::get('/download/{appName}','AppUploadController@download');

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


Route::get('mahasiswa.test/', function () {
  return view('mahasiswa.test');
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
Route::get('fl.Film1/', function () {
  return view('fl.Film1');
});
Route::get('fl.Film2/', function () {
  return view('fl.Film2');
});
Route::get('fl.Film3/', function () {
  return view('fl.Film3');
});
Route::get('fl.Film4/', function () {
  return view('fl.Film4');
});
Route::get('fl.Film5/', function () {
  return view('fl.Film5');
});
Route::get('fl.Film6/', function () {
  return view('fl.Film6');
});
Route::get('fl.Film7/', function () {
  return view('fl.Film7');
});
Route::get('fl.Film8/', function () {
  return view('fl.Film8');
});

//Python
Route::get('pyt.welcomepyt/', function () {
  return view('pyt.welcomepyt');
});
Route::get('pyt.pytexample/', function () {
  return view('pyt.pytexample');
});
Route::get('pyt.pytexer/', function () {
  return view('pyt.pytexer');
});
Route::get('pyt.pytfile/', function () {
  return view('pyt.pytfile');
});
Route::get('pyt.pytmat/', function () {
  return view('pyt.pytmat');
});
Route::get('pyt.pytmacl/', function () {
  return view('pyt.pytmacl');
});
Route::get('pyt.pytmodules/', function () {
  return view('pyt.pytmodules');
});
Route::get('pyt.pytreferences/', function () {
  return view('pyt.pytreferences');
});
Route::get('pyt.pyttutor/', function () {
  return view('pyt.pyttutor');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Forum routes
Route::get('/new-topic', function () {
  return view('client.new-topic');
});
//To Forum Main Page
Route::get('/mainForum', 'App\Http\Controllers\FrontEndController@index')->name('forum_main');

//Category Overview
Route::get('/category/overview/{id}', 'App\Http\Controllers\FrontEndController@categoryOverview')->name('category.overview');

//Forum Overview
Route::get('/forum/overview/{id}', 'App\Http\Controllers\FrontEndController@forumOverview')->name('forum.overview');

//Admin pages
Route::middleware(['auth', 'admin'])->group(function(){
route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');
route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');

route::get('dashboard/category/new', 'App\Http\Controllers\CategoryController@create')->name('category.new');
route::post('dashboard/category/new', 'App\Http\Controllers\CategoryController@store')->name('category.store');
route::get('dashboard/categories', 'App\Http\Controllers\CategoryController@index')->name('categories');

route::get('dashboard/categories/{id}', 'App\Http\Controllers\CategoryController@show')->name('category');

route::get('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
route::post('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
route::get('dashboard/categories/delete/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');

route::get('dashboard/forums/edit/{id}', 'App\Http\Controllers\ForumController@edit')->name('forum.edit');
route::post('dashboard/forums/edit/{id}', 'App\Http\Controllers\ForumController@update')->name('forum.update');
route::get('dashboard/forums/delete/{id}', 'App\Http\Controllers\ForumController@destroy')->name('forum.destroy');
});

//Forum Client
route::get('client/forum/new', 'App\Http\Controllers\ForumController@create')->name('forum.new');
route::post('client/forum/new', 'App\Http\Controllers\ForumController@store')->name('forum.store');
route::get('client/forums', 'App\Http\Controllers\ForumController@index')->name('forums');

route::get('client/forums/{id}', 'App\Http\Controllers\ForumController@show')->name('forum');

// Topics Client
route::get('client/discussion/new/{id}', 'App\Http\Controllers\DiscussionController@create')->name('discussion.new');
route::post('client/discussion/new', 'App\Http\Controllers\DiscussionController@store')->name('discussion.store');
route::get('client/discussion/{id}', 'App\Http\Controllers\DiscussionController@show')->name('discussion');
route::post('client/discussion/reply/{id}', 'App\Http\Controllers\DiscussionController@reply')->name('discussion.reply');
route::get('client/discussion/reply/delete/{id}', 'App\Http\Controllers\DiscussionController@destroy')->name('reply.delete');
