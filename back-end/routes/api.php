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

/* Interface provided to the front end of the photographic artist and his image operation */
Route::group([
    'middleware' => ['cors'],
], function () {
    Route::get('artist', 'ArtistUserController@index');
    Route::get('artist/{id}', 'ArtistUserController@show');
    Route::post('artist', 'ArtistUserController@store');
    Route::put('artist/{id}', 'ArtistUserController@update');
    Route::delete('artist/{id}', 'ArtistUserController@delete');
});
