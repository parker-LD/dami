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


Route::group(['namespace'=>'home'],function () {
    Route::get('/list', 'ListController@list_');
    Route::get('/detail', 'ListController@detail');
    Route::get('/comment', 'CommentController@comment');
    Route::post('/comment/insert', 'CommentController@insert');
});




Route::controller('/admin/login','admin\LoginController');
Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'login'],function (){
    Route::get('/','AdminController@index');
    Route::controller('/user','UserController');
    Route::controller('/cate','CateController');
    Route::controller('/good','GoodsController');
    Route::controller('/sku','SkuController');
    Route::controller('/comment','CommentController');
});