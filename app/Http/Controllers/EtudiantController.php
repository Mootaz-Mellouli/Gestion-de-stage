<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Encadreur;
use Illuminate\Http\Request;
use App\Stage;

class EtudiantController extends Controller
{
    public function etudiantList()
    {
        $etudiant = Etudiant::all();
        return view('layouts.etudiant', ['etudiants' => $etudiant]);
    }
    public function stageView(){
        return view('layouts/stage',['stages' => Stage::paginate(10)]);
    }
  //  public function index()
  //  {
  //      return view('layouts.Employe.index',['stages' => Stage::paginate(10)]);
   // }
  //  public function listStage()
   // {
   //     $stage = Stage::all();
     //   return view('layouts.Employe.stage_form',['stages' => $stage]);
 //   }

    public function EncadrantView(){
        return view('layouts/ContactEncadrant',['encadreurs' => Encadreur::paginate(10)]);
    }
}
