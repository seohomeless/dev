<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/tovar/{id}', 'HomeController@show')->name('showproduct');
Route::get('/cat/{id}', 'HomeController@showcategori')->name('showcategori');

Route::resource('product', 'ProductController');
Route::resource('categori', 'CategoriController');
