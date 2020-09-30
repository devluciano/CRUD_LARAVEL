<?php

use GuzzleHttp\Middleware;
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
Route::group(['middleware' => 'web'], function(){
    Route::get('/','HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/contatos','ContatosController@index')->middleware('auth');
Route::get('/contatos/new','ContatosController@new')->middleware('auth');
Route::post('/contatos/add','ContatosController@add')->middleware('auth');
Route::get('contatos/{id}/edit', 'ContatosController@edit')->middleware('auth');
Route::post('/contatos/update/{id}', 'ContatosController@update')->middleware('auth');
Route::delete('/contatos/delete/{id}', 'ContatosController@delete')->middleware('auth');


        
    
    
    


