<?php
use App\Map;
use App\Bis;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MapController@index');

Route::post('user_create', 'UserController@create');
Route::get('map', 'MapController@index');
Route::get('map/{id}/lat', 'MapController@lat');
Route::get('map/{id}/stat', 'MapController@stat');
Route::get('map/otw', 'MapController@otw');
Route::get('map/op', 'MapController@op');
Route::get('map/oa', 'MapController@oa');
Route::get('bis/{id}', 'MapController@bis');