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


// Route::post('auth/login', 'AuthController@login');

Route::prefix('auth')->group(function () {
    Route::post('login', 'AuthController@login')->name('users.login');
    
    Route::group(['middleware' => ['auth']], function () {
        Route::get('me', 'AuthController@me')->name('users.me');
        Route::post('logout', 'AuthController@logout')->name('users.logout');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('violences','ViolenceController');
    Route::resource('users','UserController');
    Route::resource('reports','ReportController');
});


