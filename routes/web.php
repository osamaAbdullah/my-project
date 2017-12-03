<?php

Route::get('/',function(){return view('index');});




Route::prefix('passengers')->group(function() {
    // Authentication Routes...
    Route::get('login', 'Passenger\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Passenger\Auth\LoginController@login');
    Route::post('logout', 'Passenger\Auth\LoginController@logout')->name('logout');

// Registration Routes...
    Route::get('register', 'Passenger\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Passenger\Auth\RegisterController@register');

// Password Reset Routes...
    Route::get('password/reset', 'Passenger\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Passenger\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Passenger\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Passenger\Auth\ResetPasswordController@reset');
});

Route::prefix('drivers')->group(function() {
    // Authentication Routes...
    Route::get('login', 'drivers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'drivers\Auth\LoginController@login');
    Route::post('logout', 'drivers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
    Route::get('register', 'drivers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'drivers\Auth\RegisterController@register');

// Password Reset Routes...
    Route::get('password/reset', 'drivers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'drivers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'drivers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'drivers\Auth\ResetPasswordController@reset');
});