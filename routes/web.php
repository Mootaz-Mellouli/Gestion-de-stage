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

Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/etudiants','HomeController@goEtudiant')->name('etudiant');
Route::get('/entreprises','HomeController@goEntreprise')->name('entreprise');

/*****************Employe Routes************** */
Route::group(['middleware' => 'auth'], function() {
  Route::get('/employe', 'EmployeController@employe_Index')->name('employe');
  Route::get('/employe/documents', 'EmployeController@documents')->name('employe.docs');


});


Route::group(['middleware' => ['auth', 'isAdmin']], function() {
    Route::resource('employe/employeDetails', 'EmployeController')->parameters([
        'employeDetails' => 'employee'
    ]);
    Route::resource('employe/stages', 'EmployeStageController');
  });

/********************************************* */

Route::get('/encadreur', 'EncadreurController@encadreurList')->name('encadreur');
Route::get('/encadreur/pfe', 'EncadreurController@pfe')->name('encadreur.pfe');;
Route::group(['middleware' => ['auth', 'isAdmin']], function() {
    Route::resource('encadreur/encadreurDetails', 'EncadreurController')->parameters([
        'encadreurDetails' => 'encadreur'
    ]);
  });

/********************************************* */
Route::group(['middleware' => ['auth', 'isAdmin']], function() {
  Route::resource('employe/employeDetails', 'EmployeController')->parameters([
      'employeDetails' => 'employee'
  ]);
  Route::resource('entreprise/entrepriseStages', 'EntrepriseStageController');
});


Route::get('/entreprise','EntrepriseController@entrepriseList');
Route::group(['middleware' => ['auth', 'isAdmin']], function() {
  Route::resource('entreprise/entrepriseDetails', 'EntrepriseController')->parameters([
      'entrepriseDetails' => 'entreprise'
  ]);
});

/***************************************** */

Route::get('/etudiant', 'EtudiantController@etudiantList');
Route::get('/stage','EtudiantController@stageView')->name('stage');
Route::get('/contactEncadrant','EtudiantController@EncadrantView')->name('contactEncadrant');



/************************************************************************ */
Route::resource('fileupload','FileuploadController');

Route::get('/download',function(){
  $file = public_path()."/RédactionPFE.pdf";

  $headers = array(
    'Content-type: application/pdf',
  );

  return Response::download($file, "RédactionPDF.pdf", $headers);

}); 