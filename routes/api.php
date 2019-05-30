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

/*Route::middleware('auth:api')->get('/usuarios', function (Request $request) {
    return $request->user();
});*/

Route::group(array('prefix' => 'hotel/gerencia'), function(){    
    Route::get('/usuarios', 'UsersController@index')-> middleware ( 'cors' );;
    Route::get('/usuarios/{id}', 'UsersController@show')-> middleware ( 'cors' );;
    Route::delete('/usuarios/{id}','UsersController@destroy')-> middleware ( 'cors' );;
    Route::put('/usuarios/{id}', 'UsersController@update')-> middleware ( 'cors' );;        
    Route::post('/usuarios', 'UsersController@store')-> middleware ( 'cors' );
});

Route::group(array('prefix' => 'hotel/atendimento'), function(){    
    Route::get('/apartamentos', 'ApartamentosController@index')-> middleware ( 'cors' );;
    Route::get('/apartamentos/{id}', 'ApartamentosController@show')-> middleware ( 'cors' );;
    Route::delete('/apartamentos/{id}','ApartamentosController@destroy')-> middleware ( 'cors' );;
    Route::put('/apartamentos/{id}', 'ApartamentosController@update')-> middleware ( 'cors' );;        
    Route::post('/apartamentos', 'ApartamentosController@store')-> middleware ( 'cors' );
});

Route::group(array('prefix' => 'hotel/atendimento'), function(){    
    Route::get('/hospedes', 'HospedesController@index')-> middleware ( 'cors' );;
    Route::get('/hospedes/{id}', 'HospedesController@show')-> middleware ( 'cors' );;
    Route::delete('/hospedes/{id}','HospedesController@destroy')-> middleware ( 'cors' );;
    Route::put('/hospedes/{id}', 'HospedesController@update')-> middleware ( 'cors' );;        
    Route::post('/hospedes', 'HospedesController@store')-> middleware ( 'cors' );
});






