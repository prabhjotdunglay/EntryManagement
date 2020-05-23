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

Route::get('/','LeadsController@leadsForm')->name('welcome');
Route::post('/','LeadsController@leads');


Route::get('register','RegisterController@registerForm')->name('register');
Route::post('register','RegisterController@register');

Route::get('login','LoginController@loginForm')->name('login');
Route::post('login','LoginController@login');

Route::get('logout', 'Logincontroller@logout')->name('logout');
Route::post('logout', 'Logincontroller@logout');

Route::group(['middleware' => ['auth', 'admin']], function(){ // here admin is the kernel in first line
    Route::get('admin','DashboardController@admin')->middleware('auth');;
});
Route::get('customer','DashboardController@customer')->middleware('auth');
Route::get('forgot_password' , 'ForgotPassword@forgot')->name('forgot_password');
Route::post('forgot_password' , 'ForgotPassword@password');
Route::get('reset_password/{email}/{code}', 'ForgotPassword@reset')->name('reset_password');

//admin dashboard
Route::resource('/company','CompanyController');

Route::resource('/code','CodeController');

Route::resource('/reception','ReceptionController');
Route::resource('/license','LicenseController');
Route::get('/enquiry', 'LeadsController@enquiry');

Route::post('sendotp', 'VisitorController@send')->name('visitor.send');

Route::get('visitor_extra_details/{phone?}', 'VisitorController@visitor_extra_details')->name('visitor.extra_details');

//Route::resource('/visitor','VisitorController');
Route::get('/visitor','VisitorController@create')->name('visitor.new');
Route::post('/visitor','VisitorController@store')->name('visitor.store');
Route::get('/about', function(){

    return 'about';
});

Route::get('/returningvisitor', function () {
    return view('returningvisitor');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});


//customer dashboard
Route::resource('/department','DepartmentController');
Route::resource('/employee','EmployeeController');
Route::get('/allvisitors','ReportsController@index');
Route::get('/visitors/department','ReportsController@department');
Route::get('/visitors/employee','ReportsController@employee');
