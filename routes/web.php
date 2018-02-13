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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/123',function(){
//    return 'sdfsdf';//
//});

Route::get('hello','HelloController@index');
//1 ルートパラメータ路线参数Route::get('hello/{id?}/{pass?}','HelloController@index');
Route::get('hello','HelloController@index');
Route::get('hello/{id?}','HelloController@index');
Route::get('hello','HelloController@index');
Route::post('hello','HelloController@index');

Route::get('book','BookController@index');
Route::get('book/find','BookController@find');
Route::post('book/find','BookController@saerch');
Route::get('find/{id?}','BookController@find');
Route::get('book/add','BookController@add');
Route::post('book/add','BookController@add');

Route::get('edit/{id?}','BookController@edit');
Route::post('edit/{id?}','BookController@edit');

Route::get('book/del/{id?}','BookController@del');
Route::post('book/del{id?}','BookController@remove');

Route::get('auther','AutherController@index');
Route::get('auther/add/{id?}','AutherController@add');
Route::post('auther/add','AutherController@create');

Route::get('message','MessageController@index');
Route::get('add/{id?}','MessageController@add');
Route::post('message/add','MessageController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('auther','HelloController@index')->middleware('auth');
Route::get('hello','HelloController@index')->middleware('auth');
