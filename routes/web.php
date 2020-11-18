<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'AcceuilController@index')->name('acceuil');
Route::get('inscription', 'AcceuilController@inscription')->name('inscription');

Route::get('/home', 'HomeController@index')->name('home');

// route de ladmin
// Route::get('admin', 'Admin\Logincontroller@showLoginForm')->name('admin.login');
// Route::post('admin', 'Admin\LoginController@login');
// Route::get('admin/dashboard', 'AdminController@index');

Route::get('admin/dashboard', 'HomeController@adminDashboard')->name('admin.dashboard')->middleware('is_admin');
