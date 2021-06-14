<?php

use App\Models\Quote;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Admin Routes...
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){
    Route::group(['middleware' => 'cached'], function(){
        Route::get('', 'DashboardController@index')->name('admin');
        Route::get('citas', 'QuotesController@index')->name('admin.quotes.index');
        Route::get('citas/editar/{id}', 'QuotesController@edit')->name('admin.quotes.edit');
        Route::post('citas/actualizar', 'QuotesController@update')->name('admin.quotes.update');
        Route::post('citas/enviar-email', 'MessageController@store')->name('admin.messages.store');
    });
});

// Login Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

// Logout Routes...
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
/*
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::resetPassword();

// Password Confirmation Routes...
class_exists(Route::prependGroupNamespace('Auth\ConfirmPasswordController'))) {
    Route::confirmPassword();
}

// Email Verification Routes...
Route::emailVerification();

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Auth::routes();
*/
