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


/**
 * 主页相关
 */

Route::get('/', [
    'as' => 'home',
    'uses' => 'Home\HomeController@home'
]);

Route::get('/gymList', [
    'as' => 'gymList',
    'uses' => 'Home\HomeController@gymList'
]);

/**
 * 用户相关
 */

Route::get('/user/list', [
    'as' => 'list',
    'uses' => 'User\UserController@showList'
]);


