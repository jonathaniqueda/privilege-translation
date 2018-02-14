<?php

Route::get('change-locale/{locale}', function ($locale) {
    session(['my_locale' => $locale]);
    return redirect()->back();
})->name('change_locale');

Route::get('/', 'HomeController@index')->name('index')->middleware('set.locale');

//done
Route::get('/about', 'AboutController@index')->name('about')->middleware('set.locale');

//doing
Route::get('/services', 'ServiceController@index')->name('services')->middleware('set.locale');
Route::get('/work-with-us', 'WorkWithUsController@index')->name('work_with_us')->middleware('set.locale');
Route::match(['GET', 'POST'], '/contact', 'ContactController@index')->name('contact')->middleware('set.locale');