<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors']], function () {
    
    Route::get('/listarDivisiones', 'divisionesController@listarDivisiones')->name('listarDivisiones');
    Route::get('/listarSubDivisiones/{idDivision}', 'divisionesController@listarSubDivisiones')->name('listarSubDivisiones');
    Route::post('/crearDivision', 'divisionesController@crearDivision')->name('crearDivision');
    Route::get('/mostrarDivision/{id}', 'divisionesController@mostrarDivision')->name('mostrarDivision');
    Route::post('/editarDivision/{id}', 'divisionesController@editarDivision')->name('editarDivision');
    Route::get('/eliminarDivision/{id}', 'divisionesController@eliminarDivision')->name('eliminarDivision');



});
