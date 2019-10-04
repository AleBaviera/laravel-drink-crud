<?php

Route::get('/cube/drink', 'DrinkController@index')->name('drinkIndex');
Route::get('/cube/create', 'DrinkController@create')->name('drinkCreate');
Route::post('/cube/store','DrinkController@store')->name('drinkStore');
Route::get('/cube/{id}/show','DrinkController@show')->name('drinkShow');
Route::get('/cube/{id}/edit','DrinkController@edit')->name('drinkEdit');
Route::post('/cube/{id}/update','DrinkController@update')->name('drinkUpdate');
Route::get('/cube/{id}/delete','DrinkController@destroy')->name('drinkDelete');
