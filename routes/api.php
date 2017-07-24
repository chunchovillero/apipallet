<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Ruta para obtener usuarios
Route::resource('users','UserController',['only'=>[
	'index'
	]]);
//Ruta para obtener datos de compañia
Route::resource('company','CompaniesController',['only'=>[
	'index'
	]]);

//Ruta para obtener datos de Warehouse
Route::resource('warehouse','WarehouseController',['only'=>[
	'index'
	]]);

//Ruta para obtener los clientes
Route::resource('clients','ClientesController',['only'=>[
	'index'
	]]);
//Ruta para obtener la relacion de cliente con su warehouse
Route::resource('clientwarehouse','ClientesWarehouseController',['only'=>[
	'index'
	]]);

//Ruta para obtener la relacion de usuario y Warehouse
Route::resource('warehouseuser','WarehouseuserController',['only'=>[
	'index'
	]]);
