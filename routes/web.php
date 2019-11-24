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

Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/recruiter', 'EmployerController@employer');
Route::get('/user', 'UserController@index');

Route::get('/registeremployer', 'RegisterEmployersController@registerform')->name('registeremployer');
Route::get('/employers', 'AdminController@employers')->name('employers');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('abouts', 'AboutsController');
Route::resource('categories', 'CategoriesController');
Route::resource('projects', 'ProjectsController');
Route::resource('freelancers', 'FreelancersController');
Route::get('/findfreelancer', 'FreelancersController@findfreelancers')->name('findfreelancers');
Route::get('/joblistings', 'FreelancersController@joblistings')->name('joblistings');
Route::resource('countries', 'CountriesController');
Route::resource('cities', 'CitiesController');

Auth::routes(['verify' => true]);
