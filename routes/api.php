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

    // EndPoints for Notes Class
    Route::get('getAllNotes','NoteController@getAllNotes') -> name('getAllNotes');

    // EndPoints for Task Class
    Route::get('getAllTasks','TaskController@getAllTasks') -> name('getAllTasks');
// });

Route::post('login', 'AuthenticateController@authenticate')->name('login');
Route::post('insertTask', 'TaskController@insertTask')->name('insertTask');
Route::post('insertNote', 'NoteController@insertNote')->name('insertNote');
