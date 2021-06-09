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

Route::get('/employe', 'EmployeController@employe_Index')->name('employe');
Route::get('/employe/documents', 'EmployeController@documents')->name('employe.docs');;

Route::group(['middleware' => ['auth', 'isAdmin']], function() {
    Route::resource('employe/employeDetails', 'EmployeController')->parameters([
        'employeDetails' => 'employee'
    ]);
  });

/********************************************* */

Route::get('/encadreur', 'EncadreurController@encadreurList');
Route::group(['middleware' => 'auth'], function() {
    Route::resource('encadreur/encadreurDetails', 'EncadreurController')->parameters([
        'encadreurDetails' => 'encadreur'
    ]);
  });

/********************************************* */


Route::get('/entreprise','EntrepriseController@entrepriseList');


/***************************************** */

Route::get('/etudiant', 'EtudiantController@etudiantList');
