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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'IndexController@index');
//Route::get('/task', 'TaskController@index');
Route::get('/task', function(){
		$my = DB::table('tasks')->get();
		return view('welcome', compact('my'));
});
Route::get('/task/{tas}', function($id){
		$my = DB::table('tasks')->find($id);
		return view('show', compact('my'));
});
Route::get('article/{id}', 'IndexController@show')->name('show');
Route::get('page/add','IndexController@add');
Route::post('page/add','IndexController@store')->name('articleStore');
