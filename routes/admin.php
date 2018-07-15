<?php

Route::name('admin')->get('/', 'HomeController@index');
Route::resource('posts', 'PostController');
