<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('join/join',function () {
    return view('student.join.join');
});
Route::post('joinstore', 'joinController@store');
Route::resource('join/join', 'joinController');

//Employee Login
Route::get('employee/login', 'EmployeeAuth\LoginController@showLoginForm');
Route::post('employee/login', 'EmployeeAuth\LoginController@login');
Route::post('employee/logout', 'EmployeeAuth\LoginController@logout');

//Employee Register
Route::get('employee/register', 'EmployeeAuth\RegisterController@showRegistrationForm');
Route::post('employee/register', 'EmployeeAuth\RegisterController@register');

//Employee Passwords
Route::post('employee/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('employee/password/reset', 'EmployeeAuth\ResetPasswordController@reset');
Route::get('employee/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('employee/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');


//Instructor Login
Route::get('instructor/login', 'InstructorAuth\LoginController@showLoginForm');
Route::post('instructor/login', 'InstructorAuth\LoginController@login');
Route::post('instructor/logout', 'InstructorAuth\LoginController@logout');

//Instructor Register
Route::get('instructor/register', 'InstructorAuth\RegisterController@showRegistrationForm');
Route::post('instructor/register', 'InstructorAuth\RegisterController@register');

//Instructor Passwords
Route::post('instructor/password/email', 'InstructorAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('instructor/password/reset', 'InstructorAuth\ResetPasswordController@reset');
Route::get('instructor/password/reset', 'InstructorAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('instructor/password/reset/{token}', 'InstructorAuth\ResetPasswordController@showResetForm');


//Student Login
Route::get('student/login', 'StudentAuth\LoginController@showLoginForm');
Route::post('student/login', 'StudentAuth\LoginController@login');
Route::post('student/logout', 'StudentAuth\LoginController@logout');

//Student Register
Route::get('student/register', 'StudentAuth\RegisterController@showRegistrationForm');
Route::post('student/register', 'StudentAuth\RegisterController@register');

//Student Passwords
Route::post('student/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('student/password/reset', 'StudentAuth\ResetPasswordController@reset');
Route::get('student/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('student/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');


//Newjoin Login
Route::get('newjoin/login', 'NewjoinAuth\LoginController@showLoginForm');
Route::post('newjoin/login', 'NewjoinAuth\LoginController@login');
Route::post('newjoin/logout', 'NewjoinAuth\LoginController@logout');

//Newjoin Register
Route::get('newjoin/register', 'NewjoinAuth\RegisterController@showRegistrationForm');
Route::post('newjoin/register', 'NewjoinAuth\RegisterController@register');

//Newjoin Passwords
Route::post('newjoin/password/email', 'NewjoinAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('newjoin/password/reset', 'NewjoinAuth\ResetPasswordController@reset');
Route::get('newjoin/password/reset', 'NewjoinAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('newjoin/password/reset/{token}', 'NewjoinAuth\ResetPasswordController@showResetForm');
