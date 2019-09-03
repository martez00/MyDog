<?php

Route::get('locale/{locale}', 'LocaleController@change')->name('locale');
Route::get('/', 'PageController@index')->name('index');
Auth::routes();
