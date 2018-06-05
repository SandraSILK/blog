<?php

Route::name('admin')->get('/', 'HomeController@index');

Route::group(['as' => 'posts.', 'prefix' => 'posts'], function() {
    Route::name('index')->get('/', 'PostController@index');
    Route::name('create')->get('/create', 'PostController@create');
    Route::name('store')->post('/store', 'PostController@store');
    Route::name('edit')->get('/edit/{post}', 'PostController@edit');
    Route::name('update')->put('/update/{post}', 'PostController@update');
});
