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

Route::group(['middlewareGroups' => 'web'], function(){
    Route::get('/', 'PagesController@home');
    Route::get('blog', 'PagesController@allBlog');
    Route::get('blog/{hash?}', 'PagesController@getBlog');
    
    Route::get('user586', 'PagesController@user586');
    Route::post('user586', 'JundiController@login');
    
    Route::get('user586/dashboard', 'PagesController@dashboard');
    
    Route::get('user586/create', 'PagesController@create');    
    Route::post('user586/create', 'BlogController@create');
    
    Route::post('user586/draft', 'BlogController@draft');
    
    Route::post('user586/edit', 'BlogController@edit');
    
    Route::post('user586/publish', 'BlogController@publish');
});

