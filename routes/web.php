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
    return view('home');
});

Route::get('/productos','productController@index');
Route::post('/producto/proveedor','productController@provider');
Route::patch('/producto/proveedor/actualizar','productController@updateProvider');
Route::patch('/producto/modificar','productController@update');
Route::delete('/producto/proveedor/eliminar','productController@deleteProvider');
Route::delete('/producto/eliminar','productController@delete');
