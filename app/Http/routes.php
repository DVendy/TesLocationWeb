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

Route::get('map/otw', function()
{
	$user = Bis::all();
	$i = 1;
	$sung = "";
	foreach ($user as $key) {
		if($key->status == "On the way"){
			$sung .= "<tr>
					<td>". $key->id ."</td>
					<td>". $key->jalur ."</td>
					<td>". $key->keterangan ."</td>
					<td>". $key->isi ."</td>
					<td>". $key->keterangan2 ."</td>
					<td> 
						<div class=\"pull-right\">
							<a onclick=\"myFunction('". $key->id ."')\" title=\"Search\"><i class=\"icon-search3\"></i></a>	
						</div>
					</td>
				</tr>";
			$i++;
						
		}
	}
    return $sung;
});

Route::get('map/op', function()
{
	$user = Bis::all();
	$i = 1;
	$sung = "";
	foreach ($user as $key) {
		if($key->status == "On problem"){
			$sung .= "<tr>
					<td>". $key->id ."</td>
					<td>". $key->jalur ."</td>
					<td>". $key->keterangan ."</td>
					<td>". $key->isi ."</td>
					<td>". $key->keterangan2 ."</td>
					<td> 
						<div class=\"pull-right\">
							<a onclick=\"myFunction('". $key->id ."')\" title=\"Search\"><i class=\"icon-search3\"></i></a>	
						</div>
					</td>
				</tr>";
			$i++;
								
		}
	}
    return $sung;
});

Route::get('map/oa', function()
{
	$user = Bis::all();
	$i = 1;
	$sung = "";
	foreach ($user as $key) {
		if($key->status == "On arrive"){
			$sung .= "<tr>
					<td>". $key->id ."</td>
					<td>". $key->jalur ."</td>
					<td>". $key->keterangan ."</td>
					<td>". $key->isi ."</td>
					<td>". $key->keterangan2 ."</td>
					<td> 
						<div class=\"pull-right\">
							<a onclick=\"myFunction('". $key->id ."')\" title=\"Search\"><i class=\"icon-search3\"></i></a>	
						</div>
					</td>
				</tr>";
			$i++;
								
		}
	}
    return $sung;
});

Route::get('bis/{id}', function($id)
{
    return Bis::find($id);
});

Route::get('asd', function()
{
    return Map::all();
});