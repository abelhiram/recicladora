<?php
use App\Events\formSubmit;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/aa', function () {
    /*$client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'http://httpbin.org',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);
    $response = $client->request('GET', '');
    dd($response->getBody());*/
    return view('inicio/nosotros');
});

Route::get('/inicio', 'pusherController@index')->name('inicio');

Route::get('/', function () {
    return view('/inicio/inicio');
});

Route::get('/enviar', function () {
    return view('enviar');
});
Route::get('/enviarr', function () {
    $message = request()->message;
    event(new formSubmit($message));
    return view('enviar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('reciclar/id/{id}/', 'actividadController@store');
