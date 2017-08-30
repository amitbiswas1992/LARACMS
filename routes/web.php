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

Route::get('/','TasksController@index');

Route::get('/about',function(){
$customer= DB::table('customers')->get();

return view ('about',compact('customer'));
});

Route::get('/post','PostsController@getPost');


Route::get('/post','PostsController@post');
Route::get('/post/create','PostsController@create');

Route::post('/post','PostsController@store');

Route::get('/post/show/{id}','PostsController@show');