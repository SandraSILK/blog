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
Route::name('main')->get('/', 'SitesController@index');
Route::name('contact')->get('kontakt', 'SitesController@contact');
Route::name('team')->get('ekipa', 'SitesController@team');
Route::name('stable')->get('pensjonat', 'SitesController@stable');
Route::name('riding')->get('jazda-konna', 'SitesController@riding');
Route::name('club')->get('klub-jezdziecki', 'SitesController@club');
Route::name('transport')->get('transport', 'SitesController@transport');
Route::name('training')->get('treningi', 'SitesController@training');
Route::name('archives')->get('archiwum', 'SitesController@archives');

Auth::routes();
