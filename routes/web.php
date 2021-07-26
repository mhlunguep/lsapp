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

/*Route::get('/', function () {
    return view('welcome');
})
Route::get('/hello', function () {
    return "<b>Hello Phumlani Mhlungu</b>";
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'User name is '.$name. ' with an id of '.$id;
});

Route::get('/about', function () {
    return view('pages.about');
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
