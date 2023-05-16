<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('test', function () {
    $prueba = new \App\Clases\AmorfoTest();
    return $prueba->probando();
});

/*Ruta de inicio*/
Route::get('/', function () {
    return view('welcome');
});

/*Rutas para la navegacion dentro del blog*/
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'Blog\NavegacionController@landing');
    Route::get('post/{post_slug}','Blog\NavegacionController@post');
});


/*Rutas para la navegacion dentro de las opciones de administrador*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('menu', 'HomeController@menu');
    Route::resource('post','Admin\PublicacionesController');
});
