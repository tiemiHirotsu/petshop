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

//  Route::get('/', function () {
//      return view('home');
//  })->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/agendar/{id}', 'AgendarController@edit')->name('agendar');

Route::post('/agendar/{id}', 'AgendarController@store')->name('marcar-servico');

Route::post('/send', 'SendServiceController@sendMail');

//-----------------Área Administrativa
Route::get('/admin',function(){
    return view('admin/home');
});

Route::get('admin/user', 'UserController@index')->name('usuario.index');

Route::get('admin/user/create','UserController@create')->name('usuario.create');

Route::post('admin/user', 'UserController@store')->name('usuario.store');

Route::get('admin/user/destroy/{id}', 'UserController@destroy')->name('usuario.destroy');

Route::get('admin/user/edit/{id}', 'UserController@edit')->name('usuario.edit');

Route::post('admin/user/{id}', 'UserController@update')->name('usuario.update');


Route::get('admin/servico', 'ServicoController@index')->name('servico.index');

Route::get('admin/servico/create','ServicoController@create')->name('servico.create');

Route::post('admin/servico', 'ServicoController@store')->name('servico.store');

Route::get('admin/servico/destroy/{id}', 'ServicoController@destroy')->name('servico.destroy');

Route::get('admin/servico/edit/{id}', 'ServicoController@edit')->name('servico.edit');

Route::post('admin/servico/{id}', 'ServicoController@update')->name('servico.update');

Route::get('admin/agenda', 'AgendarController@index')->name('agenda.index');
