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

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    // login 登录界面
    Route::get('login',"loginController@login");
    // 显示获取到的用户数据;
    Route::get('show',"loginController@show");
});
Route::get('msg/index','MsgController@index');
Route::get('msg/add','MsgController@add');
Route::post('msg/add','MsgController@addPost');
Route::get('msg/del/{id}','MsgController@del')->where('id','\d+');
Route::match(['get','post'],'msg/edit/{id}','MsgController@edit')->where('id','\d+');
