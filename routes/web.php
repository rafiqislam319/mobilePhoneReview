<?php

Route::get('/', [
     'uses'  => 'mobilePhoneReviewController@index',
     'as'    => '/'
]);
Route::get('/newArrivalPhone', [
    'uses'  => 'mobilePhoneReviewController@newArrivalBrandPhone',
    'as'    => 'newArrivals'
]);
Route::get('contactUs', [
    'uses'  =>  'mobilePhoneReviewController@contactUs',
    'as'    => 'contactUs'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
