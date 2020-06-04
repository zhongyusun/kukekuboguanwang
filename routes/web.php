<?php

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

Route::get('/', function () {
    return view('welcome');
});

//后台需要验证的路由
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //后台首页
    Route::get('kukekubo','AdminController@index')->name('kukekubo');
    Route::get('logout','SessionsController@logout')->name('logout');
});
//后台不需要验证的路由
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //登录
    Route::get('login','SessionsController@create')->name('login');
    Route::post('store','SessionsController@store')->name('store');

});



