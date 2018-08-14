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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/whitelist/sheriff', 'SheriffController@whitelistSheriff')->name('whitelistSheriff');
Route::post('/whitelist/sheriff/search', 'SheriffController@sheriffSearch')->name('sheriffSearch');
Route::get('/whitelist/sheriff/user/{uid}', 'SheriffController@showUserSheriff')->name('showUserSheriff');
Route::post('/whitelist/sheriff/user/{uid}', 'SheriffController@submitUserSheriff')->name('submitUserSheriff');

Route::get('/whitelist/ems', 'EMSController@whitelistEMS')->name('whitelistEMS');
Route::post('/whitelist/ems/search', 'EMSController@EMSSearch')->name('EMSSearch');
Route::get('/whitelist/ems/user/{uid}', 'EMSController@showUserEMS')->name('showUserEMS');
Route::post('/whitelist/ems/user/{uid}', 'EMSController@submitUserEMS')->name('submitUserEMS');

Route::get('/whitelist/staff', 'StaffController@whitelistStaff')->name('whitelistStaff');
Route::post('/whitelist/staff/search', 'StaffController@staffSearch')->name('staffSearch');
Route::get('/whitelist/staff/user/{uid}', 'StaffController@showUserStaff')->name('showUserStaff');
Route::post('/whitelist/staff/user/{uid}', 'StaffController@submitUserStaff')->name('submitUserStaff');

Route::get('/admin', 'AdministrationController@adminMenu')->name('adminMenu');
