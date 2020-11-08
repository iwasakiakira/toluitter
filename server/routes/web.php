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

Route::get('/', function () {
    return view('index');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('/timeline');

// Route::get('/', 'TopPageController@index');

//タイムライン系
Route::get('/timeline/list', 'TimelineController@showTimelinePage')->name('timeline');
Route::post('/timeline', 'TimelineController@postTweet')->name('timeline');
Route::post('/timeline/list', 'TimelineController@updateshow')->name('update');



//マイページ系
Route::get('/mypage' , 'MyPageController@show');