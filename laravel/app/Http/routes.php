<?php

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

Route::get('/', function () {
    return view('welcome');
});

/**
 * 后端
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
    /* 控制面板 */
    Route::get('/', 'AdminConsoleController@getIndex');

    /* 认证路由 */
    //登陆
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    //登出
    Route::get('logout', 'Auth\AuthController@getLogout');
});



/**
 * 前端pc
 */
Route::group(['namespace' => 'Pc'], function()
{
    //定义了注册登录路由
    Route::auth();

    //首页
    Route::get('/', 'IndexController@index');

//    //登陆
//    Route::get('login', 'Auth\AuthController@getLogin');
//    Route::post('login', 'Auth\AuthController@postLogin');
//    //登出
//    Route::get('logout', 'Auth\AuthController@getLogout');
//    //注册
//    Route::get('register', 'Auth\AuthController@getRegister');
//    Route::post('register', 'Auth\AuthController@postRegister');
//
//    Route::get('password/reset', 'Auth\PasswordController@getReset');
//    Route::post('password/reset', 'Auth\PasswordController@postReset');
//
//    Route::get('password/Email', 'Auth\PasswordController@getEmail');
//    Route::post('password/Email', 'Auth\PasswordController@postEmail');
//



});
