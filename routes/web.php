<?php

Route::get('locale/{locale}', 'LocaleController@change')->name('locale');
Route::get('/', 'PageController@index')->name('index');
Route::get('redirect/{service}', 'Auth\SocialAuthController@redirect');
Route::get('callback/{service}', 'Auth\SocialAuthController@callback');
Auth::routes();
