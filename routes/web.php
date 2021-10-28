<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','SellerController@getSeller')->middleware('CheckLogin');
Route::get('/login','AdminController@getLogin');
Route::post('/checklogin','AdminController@CheckLogin');
Route::get('/logout','AdminController@Logout');
Route::group(['prefix'=>'admin','middleware'=>'CheckLogin'],function(){
    Route::group(['prefix'=>'category'],function(){
        Route::get('/list-category','CategoryController@getCategory');
        Route::get('/details/{id}','CategoryController@getDetailsCategory');
    });
    Route::group(['prefix'=>'product'],function(){
        Route::get('/list-product','ProductController@getProduct');
        Route::get('/details/{id}','ProductController@getProductDetails');
        Route::post('/updateSku/{id}','ProductController@PostUpdateSku');
        Route::post('/updateProductInfo/{id}','ProductController@PostUpdateProductInfo');
        Route::post('/updateOriginalSku/{id}','ProductController@PostUpdateOriginalSku');

    });
    Route::group(['prefix'=>'tracking'],function(){
        Route::get('/list-tracking','TrackingController@getTracking');
        Route::get('/delete/{id}','TrackingController@getDelete');
        Route::get('/replay/{id}','TrackingController@getReplay');
    });
    Route::group(['prefix'=>'request'],function(){
        Route::get('/list-request','RequestController@getRequest');
        Route::get('/details/{id}','RequestController@Details');
        Route::get('/delete/{id}','RequestController@getDelete');
    });
    Route::group(['prefix'=>'seller'],function(){
        Route::get('/list-seller','SellerController@getSeller');
    });
    Route::group(['prefix'=>'warehouse'],function(){
        Route::get('list-warehouse','WarehouseController@getWarehouse');
    });
    Route::group(['prefix'=>'order'],function(){
        Route::get('/list-order','OrderController@getOrder');
    });
});