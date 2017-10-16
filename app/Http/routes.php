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
Route::get('home',function(){
    return view('home');

});
Route::get('vue',function(){
   return view('vue');
});
Route::get(
    'list',
    [
        'as'=>'list',
        'uses'=>'ListController@index'
    ]
);
Route::get(
  'total',
    [
        'as'=>'total',
        'uses'=>'ListController@total'
    ]

);
Route::get('deploy',['as'=>'list','uses'=>'DeployController@index']);

Route::get('chat',['as'=>'chat','uses'=>'ChatController@index']);