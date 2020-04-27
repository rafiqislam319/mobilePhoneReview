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


Route::get('brand/add', [
   'uses'  => 'BrandController@index',
   'as'    => 'brand-add'
]);
Route::post('brand/save', [
    'uses'  => 'BrandController@saveBrandInfo',
    'as'    => 'brand-save'
]);
Route::get('brand/manage', [
    'uses'   => 'BrandController@brandManage',
    'as'     => 'manage-brand'
 ]);

Route::get('brand/Unpublished/{id}', [
    'uses'  => 'BrandController@unpublishBrand',
    'as'    => 'unpublished-brand'
]);
Route::get('brand/Published/{id}', [
    'uses'  => 'BrandController@publishedBrand',
    'as'    => 'published-brand'
]);
Route::get('brand/edit/{id}', [
    'uses'  => 'BrandController@editBrand',
    'as'    => 'edit-brand'
]);
Route::post('brand/update/', [
    'uses'  => 'BrandController@updateBrand',
    'as'    => 'update-brand'
]);
Route::get('brand/delete/{id}', [
    'uses'  => 'BrandController@deleteBrand',
    'as'    => 'delete-brand'
]);
Route::get('category/add', [
    'uses'  => 'categoryController@addCategory',
    'as'    => 'category-add'
]);
Route::post('category/save', [
    'uses'  => 'categoryController@saveCategory',
    'as'    => 'category-save'
]);
Route::get('category/manage', [
    'uses'  => 'categoryController@manageCategory',
    'as'    => 'category-manage'
]);
Route::get('category/unpublished/{id}', [
    'uses'  => 'categoryController@unpublishedCategory',
    'as'    => 'unpublished-category'
]);
Route::get('category/published/{id}', [
    'uses'  => 'categoryController@publishedCategory',
    'as'    => 'Published-category'
]);
Route::get('category/edit/{id}', [
    'uses'  => 'categoryController@editCategory',
    'as'    => 'edit-category'
]);
Route::post('category/update/', [
    'uses'  => 'categoryController@updateCategory',
    'as'    => 'update-category'
]);
Route::get('category/delete/{id}', [
    'uses'  => 'categoryController@deleteCategory',
    'as'    => 'delete-category'
]);
Route::get('logo/add', [
    'uses'  => 'LogoController@index',
    'as'    => 'logo-add'
]);
Route::post('logo/save', [
   'uses'    => 'LogoController@logoSave',
   'as'      => 'logo-save'
]);
Route::get('logo/manage', [
   'uses'    => 'LogoController@logoManage',
   'as'      => 'logo-manage'
]);
Route::get('logo/unpublished/{id}', [
   'uses'    => 'LogoController@logoUnPublished',
   'as'      => 'unpublished-logo'
]);
Route::get('logo/published/{id}', [
   'uses'    => 'LogoController@logoPublished',
   'as'      => 'published-logo'
]);
Route::get('logo/edit/{id}', [
   'uses'    => 'LogoController@logoEdit',
   'as'      => 'edit-logo'
]);
Route::post('logo/update', [
   'uses'    => 'LogoController@logoUpdate',
   'as'      => 'update-logo'
]);

Route::get('logo/delete/{id}', [
   'uses'    => 'LogoController@logoDelete',
   'as'      => 'delete-logo'
]);

/*product/Mobile info goes here*/
Route::get('mobile/add', [
   'uses'    => 'MobileController@index',
   'as'      => 'add-mobile'
]);
Route::post('save/MobileInfo', [
    'uses'   => 'MobileController@saveMobileInfo',
    'as'     => 'save-mobile'
]);
Route::get('manage/MobileInfo', [
    'uses'   => 'MobileController@manageMobileInfo',
    'as'     => 'manage-mobile'
]);
Route::get('mobile/details/{id}',[
    'uses'  => 'MobileController@mobileDetails',
    'as'    => 'mobile-details'
]);
Route::get('edit/MobileInfo/{id}', [
    'uses'   => 'MobileController@editMobileInfo',
    'as'     => 'edit-mobile'
]);
Route::post('update/MobileInfo', [
    'uses'   => 'MobileController@updateMobileInfo',
    'as'     => 'update-mobile'
]);
Route::get('unpublished/MobileInfo/{id}', [
    'uses'   => 'MobileController@unPublishedMobileInfo',
    'as'     => 'unpublished-mobile'
]);
Route::get('published/MobileInfo/{id}', [
    'uses'   => 'MobileController@publishedMobileInfo',
    'as'     => 'published-mobile'
]);
Route::get('delete/MobileInfo/{id}', [
    'uses'   => 'MobileController@deleteMobileInfo',
    'as'     => 'delete-mobile'
]);


/*For Admin user section ends here*/

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
