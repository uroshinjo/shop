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

//Page routes

Route::Get('/', function(){
    return view('page.index');
});

Route::resource('/', 'HomeController');

Route::resource('/products', 'ProductsController');

Route::resource('/about', 'AboutController');

Route::resource('/basket', 'BasketController');

//Admin routes

Route::Get('/admin', function(){
    return view('admin.index');
});

Route::resource('/admin/product', 'AdminProductController');
Route::post('admin/category/edit', 'AdminCategoryController@addFeature');
Route::resource('/admin/category', 'AdminCategoryController');