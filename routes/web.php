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

Route::get('hi', function() {
	return "Hi, lagi belajar laravel ni yeee.....";
});

Route::get('myView', function() {
	return view('webtest');
});

Route::get('ID/{id}', function($id){
	echo "ID anda : ".$id;
});

Route::get('viewcontroll', 'MyfirstController@index');

Route::get('tampilnama','MyfirstController@nama');

Route::get('matkul', 'MyfirstController@matkul');


Route::get('getname/{nama}', 'MyfirstController@getNameFormUrl');

Route::get('formulir', 'MyfirstController@formulir');
Route::post('formulir/proses', 'MyfirstController@proses');

Route::get('home', 'MyfirstController@home');
Route::get('tentang', 'MyfirstController@tentang');

/*
Route::get('Admin', 'AdminController@Admin');
Route::get('header', 'AdminController@header');
Route::get('Body', 'AdminController@body');
Route::get('Footer', 'AdminController@footer');
Route::get('Form', 'AdminController@form');
*/

Route::get('Admin2', 'AdminController@Admin2');
Route::get('Body','AdminController@boddy');
Route::get('HeaderTop', 'AdminController@headertop');
Route::get('HeaderSlide', 'AdminController@headerslide');
Route::get('Footer2', 'AdminController@footer2');
Route::get('Dashboard', 'AdminController@dashboard');
Route::get('Form', 'AdminController@form');
Route::get('FormCategories', 'AdminController@formcategories');


Route::get('CategoriesCreate', 'Master\CategoriesController@create');
Route::post('CategoriesStore', 'Master\CategoriesController@store');
Route::get('CategoriesIndex', 'Master\CategoriesController@index');
Route::get('CategoriesEdit{id}', 'Master\CategoriesController@edit');
Route::post('CategoriesUpdate', 'Master\CategoriesControlle@update');
Route::get('Categories/Destroy', 'Master\CategoriesController@destroy');

Route::get('CustomerCreate', 'Master\CustomerController@create');
Route::post('CustomerStore', 'Master\CustomerController@store');
Route::get('CustomerIndex', 'Master\CustomerController@index');
Route::get('Customer/Edit', 'Master\CustomerController@edit');
Route::get('Customer/Destroy', 'Master\CustomerController@destroy');

Route::get('ProductCreate', 'Master\ProductController@create');
Route::post('ProductStore', 'Master\ProductController@store');
Route::get('ProductIndex', 'Master\ProductController@index');
Route::get('Product/Edit', 'Master\ProductController@edit');
Route::get('Product/Destroy', 'Master\ProductController@destroy');

Route::get('CustomerCreate', 'Master\CustomerController@create');
Route::post('CustomerStore', 'Master\CustomerController@store');
Route::get('CustomerIndex', 'Master\CustomerController@index');
Route::get('Customer/Edit', 'Master\CustomerController@edit');
Route::get('Customer/Destroy', 'Master\CustomerController@destroy');

Route::get('User/Create', 'Master\UserController@create');
Route::get('User/Index', 'Master\UserController@index');
Route::get('User/Edit', 'Master\UserController@edit');
Route::get('User/Destroy', 'Master\UserController@destroy');

Route::get('Sales/Create', 'Transaksi\SalesController@create');
Route::get('Sales/Index', 'Transaksi\SalesController@index');
Route::get('Sales/Edit', 'Transaksi\SalesController@edit');
Route::get('Sales/Destroy', 'Transaksi\SalesController@destroy');

Route::get('SalesDetail/Create', 'Transaksi\SalesDetailController@create');
Route::get('SalesDetail/Index', 'Transaksi\SalesDetailController@index');
Route::get('SalesDetail/Edit', 'Transaksi\SalesDetailController@edit');
Route::get('SalesDetail/Destroy', 'Transaksi\SalesDetailController@destroy');