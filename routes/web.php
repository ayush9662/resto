<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::group(['middleware'=>'web'],function(){
  Route::get('/','RestoController@index');
  Route::get('/Restolist','RestoController@list');
  Route::view('/RestoAdd','add');
  Route::post('/Addresto','RestoController@add');
  Route::get('/Restodelete/{id}','RestoController@delete');
  Route::get('/Restoedit/{id}','RestoController@edit');
  Route::post('/UpdateResto','RestoController@update');
  Route::view('/Useradd','register');
  Route::post('/register','RestoController@register');
  Route::view('/login','login');
  Route::post('/login','RestoController@login');
  Route::view('/main','main');
  Route::get('/logout','RestoController@logout');
});
