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

Route::get('/asd', function () {

    return view('welcome');
});

Route::get('/',[
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
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);

Route::group(['prefix'=>'/admincp'],function(){
    Route::get('/login',[ 'as'=>'formLogin','uses'=> 'AdminController@getLogin' ]);
    Route::post('/login', [ 'as'=>'checkLogin','uses'=> 'AdminController@postLogin' ]);
    Route::get('/create','AdminController@getCreateAccount');
});
Route::group(['prefix'=>'/cms'],function () {
    Route::get('/Index',['as'=>'cmsIndex','uses'=>'CMSController@Index']);
    Route::get('/login','CMSController@GetLogin');
    Route::post('/login',['as'=>'cmsLogin','uses'=>'CMSController@PostLogin']);
    Route::get('/manage-product/{page?}',['as'=>'cmsManageProducts','uses'=>'CMSController@ManageProduct']);
    Route::post('/editProduct',['as'=>'editProduct','uses'=>'CMSController@EditProduct']);
    Route::get('/getInfoProduct/{id}',['as'=>'getInfo','uses'=>'CMSController@GetInfo']);
});