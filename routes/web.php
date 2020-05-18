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
Route::prefix('admin')->group(function()
{
	Route::get('', 'AdminController@index')->name('admin');
    Route::resource('abouts', 'AboutsController');
    Route::resource('categories', 'CategoriesController');
    Route::get('/findfreelancer', 'FreelancersController@findfreelancers')->name('findfreelancers');
    Route::get('/joblistings', 'FreelancersController@joblistings')->name('joblistings');
    Route::resource('countries', 'CountriesController');
    Route::resource('cities', 'CitiesController');
    Route::get('/workrooms', 'WorkroomController@index')->name('workrooms');
    Route::get('/employers', 'AdminController@employers')->name('employers');
});

Route::prefix('employer')->group(function()
{
    Route::get('/login', 'PagesController@employerlogin')->name('login-form');
    Route::post('/login','Auth\EmployerLoginController@login')->name('employer-login');
    Route::get('/dashboard', 'EmployerController@employer')->name('employer-dashboard');
    Route::get('/profile', 'EmployerController@profile')->name('employer-profile');
    Route::resource('jobs', 'ProjectsController');
    Route::resource('freelancers', 'FreelancersController');
});

Route::prefix('user')->group(function()
{
    Route::get('/dashboard', 'UserController@index')->name('user-dashboard');
});
Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/freelancers', 'PagesController@freelancers')->name('allfreelancers');
Route::get('/select-registration-type', 'PagesController@registrationtype')->name('select-registration-type');
Route::get('/register-as-employer', 'RegisterEmployersController@registerform')->name('register-employer');


Auth::routes(['verify' => true]);
