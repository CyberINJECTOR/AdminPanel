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
// Route::middleware(['jwt.auth']) -> group(function() {
    // User Routes 
    Route::get('getUsers','UserController@getAll') -> name('getAllUsers');
    Route::get('getUserById/{id}','UserController@getUserById') -> name('getUserById');
    Route::post('addUser','UserController@addUser') -> name('addUser');

    // Event Routes 

    Route::get('getAllEvents','EventController@getAllEvents') -> name('getAllEvents');

    // Meta Data Routes
    Route::get('getAllColums','MetaDataController@getAllColums') -> name('getAllColums');
// });

Route::post('login', 'AuthenticateController@authenticate')->name('login');
