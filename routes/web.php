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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'karyawan'], function() {
  Route::get('/', 'DataController@index');
  Route::get('datakar', 'DataController@karyawan');
  Route::get('databoo', 'DataController@karyawanb');
  Route::get('create', 'DataController@create');
  Route::post('create', 'DataController@save');
  Route::get('edit/{id}', 'DataController@edit');
  Route::post('edit', 'DataController@update');
  Route::get('delete/{id}', 'DataController@delete');
  Route::get('detail/{id}', 'DataController@detail');
  Route::post('import', 'DataController@import');
  Route::get('import', 'DataController@upload');
  Route::get('active/{id}', 'DataController@active');
  Route::get('notactive/{id}', 'DataController@notactive');
  Route::get('booking/{id}', 'DataController@booking');
  Route::get('standby/{id}', 'DataController@standby');
  Route::get('pdf',[
    'uses'=>'DataController@pdf',
    'as'=>'caddy.pdf',
]);
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
  Route::get('/index/{id}', 'OperationController@index');
  Route::get('create', 'DataController@create');
  Route::post('create', 'OperationController@save');
  Route::post('/ajax/kode','OperationController@ajaxKode');
  Route::get('haledit', 'OperationController@halamanedit');
  Route::get('edit/{id}', 'OperationController@edit');
  Route::post('edit', 'DataController@update');
  Route::get('delete/{id}', 'DataController@delete');
  Route::get('detail/{id}', 'DataController@detail');
  Route::post('import', 'DataController@import');
  Route::get('import', 'DataController@upload');
  Route::get('activate/{id}', 'KategoriController@activate');
  Route::get('deactivate/{id}', 'KategoriController@deactivate');
});

Route::group(['prefix' => 'group'], function() {
  Route::get('/', 'GroupController@index');
  Route::get('create', 'GroupController@create');
  Route::post('create', 'GroupController@save');
  Route::get('edit/{id}', 'GroupController@edit');
  Route::post('edit', 'GroupController@update');
  Route::get('delete/{id}', 'GroupController@delete');
  Route::post('import', 'GroupController@import');
  Route::get('import', 'GroupController@upload');
});

Route::group(['prefix' => 'activasi'], function() {
  Route::get('/', 'WelcomeController@indexGroup');
  Route::get('create', 'DataController@create');
  Route::post('create', 'KomentarController@save');
  Route::get('edit/{id}', 'DataController@edit');
  Route::post('update', 'WelcomeController@update');
  Route::get('delete/{id}', 'DataController@delete');
  Route::get('detail/{id}', 'DataController@detail');
  Route::post('import', 'DataController@import');
  Route::get('import', 'DataController@upload');
  Route::post('/ajax/kode','KomentarController@ajaxKode');
  Route::get('activate/{id}', 'KategoriController@activate');
  Route::get('deactivate/{id}', 'KategoriController@deactivate');
});
