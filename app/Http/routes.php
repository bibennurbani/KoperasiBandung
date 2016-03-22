<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $data['status'] = App\Status::all();
    return view('pages/status')->with($data);    
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'api'], function () {
    //Route::get('status',['as' => 'status', function () {
    //	return App\Status::all();
    //}]);
    Route::resource('status','Api\StatusController', ['only'=>['index']]);
});

Route::group(['prefix' => 'master'], function () {
    //Route::get('status',['as' => 'status', function () {
    //	return App\Status::all();
    //}]);
    Route::resource('status','StatusController', ['only'=>['index']]);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
