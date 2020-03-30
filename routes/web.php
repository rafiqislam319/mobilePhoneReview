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


/*For Admin user section starts here*/
Route::get('adminProfile', [
    'uses' => 'UserController@profile',
    'as'  => '/profile'
]);

Route::post('profileUpdate/{id}', [
   'uses' => 'UserController@profileImageUpload',
   'as'   => '/profileImage'
]);
/*For Admin user section ends here*/

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
