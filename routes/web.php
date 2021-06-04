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
Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*****************Employe Routes************** */

Route::get('/employe', 'EmployeController@employeList');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('employe/employeDetails', 'EmployeController')->parameters([
        'employeDetails' => 'employee'
    ]);
  });

/********************************************* */

Route::get('/encadreur', 'EncadreurController@encadreurList');


Route::get('/entreprise','EntrepriseController@entrepriseList');


/***************************************** */


