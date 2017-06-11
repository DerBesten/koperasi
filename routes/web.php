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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'karyawan'], function() {
  Route::get('/', 'DataController@index');
  Route::get('create', 'DataController@create');
  Route::post('create', 'DataController@save');
  Route::get('edit/{id}', 'DataController@edit');
  Route::post('edit', 'DataController@update');
  Route::get('delete/{id}', 'DataController@delete');
  Route::get('detail/{id}', 'DataController@detail');
  Route::post('import', 'DataController@import');
  Route::get('import', 'DataController@upload');
  Route::get('activate/{id}', 'KategoriController@activate');
  Route::get('deactivate/{id}', 'KategoriController@deactivate');
});

Route::group(['prefix' => 'comment'], function() {
  Route::get('/', 'KomentarController@index');
  Route::get('create', 'DataController@create');
  Route::post('create', 'KomentarController@save');
  Route::get('edit/{id}', 'DataController@edit');
  Route::post('edit', 'DataController@update');
  Route::get('delete/{id}', 'DataController@delete');
  Route::get('detail/{id}', 'DataController@detail');
  Route::post('import', 'DataController@import');
  Route::get('import', 'DataController@upload');
  Route::post('/ajax/kode','KomentarController@ajaxKode');
  Route::get('activate/{id}', 'KategoriController@activate');
  Route::get('deactivate/{id}', 'KategoriController@deactivate');
});


Route::group(['prefix' => 'work'], function() {
  Route::get('/', 'OperationController@index');
  Route::get('create', 'DataController@create');
  Route::post('create', 'OperationController@save');
  Route::get('edit/{id}', 'DataController@edit');
  Route::post('edit', 'DataController@update');
  Route::get('delete/{id}', 'DataController@delete');
  Route::get('detail/{id}', 'DataController@detail');
  Route::post('import', 'DataController@import');
  Route::get('import', 'DataController@upload');
  Route::get('activate/{id}', 'KategoriController@activate');
  Route::get('deactivate/{id}', 'KategoriController@deactivate');
});
