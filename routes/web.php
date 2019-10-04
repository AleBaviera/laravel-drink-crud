<?php

Route::get('/cube/drink', 'DrinkController@index')->name('drinkIndex');
Route::get('/cube/create', 'DrinkController@create')->name('drinkCreate');
Route::post('/cube/store','DrinkController@store')->name('drinkStore');
