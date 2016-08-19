<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    if(Auth::guest()){
        return view('welcome');
    } else {
        return redirect('/blog');
    }
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Route::get('/', function () {
//    return redirect('/blog');
//});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');
