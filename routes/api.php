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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/allTasks' ,[
    'uses' => 'TaskController@index',
    'as' => 'tasks.index'
    ]);

Route::post('/createTask' ,[
    'uses' => 'TaskController@store',
    'as' => 'task.store'
    ]);

Route::get('/taskStatus/{id}', [

    'uses' => 'TaskController@changeStatus',
    'as' => 'task.status' 

]);