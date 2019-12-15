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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('example', array('middleware' => 'cors', 'uses' => 'ExampleController@dummy'));

//note: cors added to $middlewareGroups['api'] in Kernal.php

Route::get('/tasks', 'TasksApiController@findAll')->middleware(['cors']);
Route::get('/tasks/{id}', 'TasksApiController@find')->middleware(['cors']);

Route::post('/tasks', 'TasksApiController@create')->middleware(['cors']);
//Route::patch('/tasks/{task}', 'TasksApiController@update')->middleware(['cors']);
Route::put('/tasks/{id}', 'TasksApiController@update')->middleware(['cors']);
Route::delete('/tasks/{id}', 'TasksApiController@delete')->middleware(['cors']);
