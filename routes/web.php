<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createBlog' , function (){
  $blog = new \App\Models\Blog();

  $blog->title = "Title 1" ;
  $blog->description = "description" ;
  $blog->brief = "Brief" ;
  $blog->status = 1 ;

  $blog->save();
});
