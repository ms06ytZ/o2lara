<?php
Route::get('/direct','DirectController@index');
Route::get('/', 'IndexController@index');
Route::get('/item','ItemController@index');

Route::get('/chartsJson','IndexController@chartsJson');



Route::get('/login','Auth\LoginController@index');
Route::post('/login','Auth\LoginController@login');

Route::get('/admin_root','AdminRootController@index');
Route::post('/admin_root_update','AdminRootController@update');
