<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','WelcomeController@index');
Route::get('house-post/{id}','WelcomeController@housePostByOwner');

Route::group(['prefix' => 'admin'], function () {
    //dashboard //
    Route::get('/dashboard','AdminController@index');
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  // Post //
    Route::get('/post/add','AdminController@addPost');
    Route::post('/post/save','AdminController@savePost');
    Route::get('/post/manage','AdminController@managePost');
    Route::get('/post/edit/{id}','AdminController@editPost');
    Route::post('/post/update','AdminController@updatePost');
    Route::get('/post/delete/{id}','AdminController@deletePost');

    // Profile //

    Route::get('/profile/update','AdminController@editProfile');
    Route::post('/profile-details/save','AdminController@saveProfileDetails');
    Route::post('/profile-details/update','AdminController@updateProfileDetails');
    Route::post('/profile/save','AdminController@updateProfile');

    //Profile

});

Route::group(['prefix' => 'user'], function () {
  Route::get('/login', 'UserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'UserAuth\LoginController@login');
  Route::post('/logout', 'UserAuth\LoginController@logout')->name('logout');

  Route::get('/dashboard','UserController@index');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'UserAuth\RegisterController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');

    Route::get('house-post/{id}','UserController@housePostByOwner');
});
