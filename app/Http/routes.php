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
        return view('auth.login');
    } else {
        return redirect('/blog');
    }
});
Route::get('logout', 'AuthController@getLogout');
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');

Route::auth();

Route::get('/home', 'HomeController@index');

// Admin
Route::get('admin', function(){
    return redirect('admin/post');
});

Route::group(['namespace' => 'Admin', 'middleware'=> 'auth',], function() {
    Route::resource('admin/post', 'PostController', ['except' => 'show']);
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);
    Route::get('admin/upload', 'UploadController@index');

    Route::post('admin/upload/file', 'UploadController@uploadFile');
    Route::delete('admin/upload/file', 'UploadController@deleteFile');
    Route::post('admin/upload/folder', 'UploadController@createFolder');
    Route::delete('admin/upload/folder', 'UploadController@deleteFolder');
});


