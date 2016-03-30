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
    return view('pages/dashboard');    
});

Route::get('/login', function () {    
    return view('pages/login');    
});
Route::get('/dashboard', function () {    
    return view('pages/dashboard');    
});
Route::post('/dashboard', function () {    
    return view('pages/dashboard');    
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

Route::group(['prefix' => 'pendataan'], function () {
    //todo : ganti ke controller semua
    //Route::get('/buruh', function () {return view('pages/pendataan/buruh');});
    Route::resource('buruh','UserController', ['only'=>['index']]);

    Route::get('/koperasi', function () {return view('pages/pendataan/koperasi');});

    //Route::get('/supplier', function () {return view('pages/pendataan/supplier');});
    Route::resource('supplier','PasarController', ['only'=>['index']]);

    //Route::get('/barang', function () {return view('pages/pendataan/barang');});
    Route::resource('barang','BarangController', ['only'=>['index']]);
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
