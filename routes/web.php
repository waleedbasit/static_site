<?php













Route::get('/', 'MainpageController@index' )->name('home');
Route::post('/mainpage', 'MainpageController@update' );
Route::get('/mainpage', 'MainpageController@show');
Route::get('/componet/{componet}','ComponetController@show');


Route::get('/about/{about}','AboutpageController@show');

Route::get('/login','SessionsController@login')->name('login');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@logout');