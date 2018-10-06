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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::resource('/users', 'admin\UserController');
    Route::get('/admin/companies', 'admin\CompanyController@index');
    Route::get('/admin/companies/edit/{id}', 'admin\CompanyController@edit')->name('admin.companies.edit');
    //employee routes
    Route::get('/admin/employees', 'admin\EmployeeController@index');
    Route::get('/admin/employees/details/{id}', 'admin\EmployeeController@show')->name('admin.employees.details');
    Route::get('/admin/employees/edit/{id}', 'admin\EmployeeController@edit')->name('admin.employees.edit');
    //
});



