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
Route::get('/', function(){
    return 'Home Page';
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Route::get('articles', 'ArticlesController@index');
// Route::get('articles/create', 'ArticlesController@create');
// Route::get('articles/{id}', 'ArticlesController@show');
// Route::post('articles', 'ArticlesController@store'); // store a new article
// Route::get('articles/{id}/edit', 'ArticlesController@edit');

// this command creates all the routes for Restful application
Route::resource('articles', 'ArticlesController');

// this works for api's
// Route::get('foo', function(){
//   return 'Bar';
// });

Auth::routes();

// trying out our own middleware
Route::get('foo', ['middleware' => 'manager', function()
{
    return 'This page may only be viewed by Managers!';
}]);

// Route::get('/home', 'HomeController@index')->name('home');
