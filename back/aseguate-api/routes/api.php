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

Route::get('polizas', function() {

    return \App\Models\cliente::all();
});

//Route::post('crear_cliente', function(Request $request) {
//    return \App\Models\cliente::create($request->all);
//});

Route::post('crear_cliente', 'clienteController@crear_cliente');
