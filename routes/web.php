<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/services', 'ServiceController@services')->name('services');
Route::get('/work-with-us', 'WorkWithUsController@index')->name('work_with_us');
Route::match(['GET', 'POST'], '/contact', 'ContactController@contact')->name('contact');