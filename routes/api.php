<?php

use Illuminate\Http\Request;
use App\Events\formSubmit;
use GuzzleHttp\Client;

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

Route::get('/enviarr/id/{id}/', function () {
    $message = request()->id;
    event(new formSubmit($message));

});
Route::get('reciclar/id/{id}/', 'actividadController@store');

