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


Route::get('/', 'mainController@home')->name('home');
Route::get('/delivery/menu/favourites', 'mainController@menuFavourites')->name('menuFavourites');
Route::get('/menu/in-store','mainController@menuInStore');
Route::get('/menu/in-store','mainController@menuInStore');

Route::post('/api/cart/addItem', 'mainController@addItem')->name('addItem');
Route::post('/api/cart/addItems', 'mainController@addItems')->name('addItems');
Route::post('/api/cart/remove', 'mainController@remove')->name('remove');
Route::post('/api/user/register', 'registerController@register')->name('register');
Route::post('/api/user/logout', 'loginController@logout')->name('logout');
Route::post('/api/user/login', 'loginController@login')->name('login');


Route::get('/login/facebook', 'socialAuthFacebookController@redirect')->name('facebookRedirect');
Route::get('/callback', 'socialAuthFacebookController@callback')->name('facebookCallBack');