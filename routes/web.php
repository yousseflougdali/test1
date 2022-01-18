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
    return view('welcome');
});
// Testing features of routes
Route::get('/test1/{id}', function () {
    return 'welcome';
});

/*Route::namespace('Testc')->group( function () {
    Route::get('test1','TestController@test1');
    Route::get('test2','TestController@test2');
    Route::get('test3','TestController@test3');
    Route::get('test4','TestController@test4');
});*/

Route::group(['prefix'=>'users','middleware'=>'auth','namespace'=>'Testc'],function(){
    Route::get('/','TestController@test1');
});

Auth::routes(['verify'=>'true']);

Route::GET('/home', 'HomeController@index')->name('home');
Route::GET('/redirect/{service}', 'SocialController@redirect');
Route::GET('/callback/{service}', 'SocialController@callback');
