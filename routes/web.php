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

// Route::get('/', function () {
//     return view('index-new');
// });

Route::get('/', 'ArticleController@index')->name('/');
Route::get('index-mobile', 'ArticleController@indexMobile')->name('index-mobile');

Route::get('detail/{alias}', 'ArticleController@detail')->name('detail');

Route::get('get-menu', 'ArticleController@getMenu')->name('get-menu');

Route::get('category', 'ArticleController@category')->name('category');


