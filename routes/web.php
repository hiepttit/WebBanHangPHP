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
Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('login',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::get('loaiSP/{type}',[
    'as'=>'loaiSP',
    'uses'=>'PageController@getCategory'
]);
Route::get('ProductDetail/{id}',[
    'as'=>'ProductDetail',
    'uses'=>'PageController@getProductDetail'
]);
Route::get('DangKy',[
    'as'=>'Register',
    'uses'=>'PageController@getRegister'
]);
Route::get('addGioHang/{id}',[
    'as'=>'AddCart',
    'uses'=>'PageController@getAddCart'
]);
Route::get('GioHang',[
    'as'=>'Cart',
    'uses'=>'PageController@getCart'
]);
Route::get('delGioHang/{id}',[
    'as'=>'delCart',
    'uses'=>'PageController@getDelCart'
]);
