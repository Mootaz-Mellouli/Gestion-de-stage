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

/*****************Employe Routes************** */

Route::get('/employe', 'EmployeController@employeList');
Route::get('/employe/employeDetails', 'EmployeController@employeDetails', function () {
    return view('layouts.AdminEmploye.adminEmploye');
})->middleware('auth')->name('adminEmploye');


/********************************************* */

Route::get('/encadreur', 'EncadreurController@encadreurList');