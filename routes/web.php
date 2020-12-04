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

Route::get('admin/dashboard', 'HomeController@adminDashboard')->name('admin.dashboard')->middleware('is_admin');

Route::get('confirmation/{id}/{token}', 'Auth\RegisterController@confirm');

Route::resource('study', 'UserController');

Route::get('study', 'UserController@performance')->name('performance');
Route::get('programme', 'UserController@programme')->name('programme');
Route::get('temps', 'UserController@temps')->name('temps');
Route::get('notify', 'UserController@notification')->name('notification');
Route::get('exo', 'UserController@exo')->name('exo');

Route::get('classeliste', 'GeneralController@classeliste')->name('classeliste');
Route::get('classe', 'GeneralController@getclasse');
Route::post('classe', 'GeneralController@addclasse');

// ajouter une matiere
Route::get('matiere', 'GeneralController@getmatiere');
Route::post('matiere', 'GeneralController@addmatiere');

//lesson
Route::get('lesson', 'GeneralController@getlesson');
Route::post('lesson', 'GeneralController@addlesson');