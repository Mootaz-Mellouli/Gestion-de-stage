<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function etudiantList()
    {
        $etudiant = Etudiant::all();
        return view('layouts.etudiant', ['etudiants' => $etudiant]);
    }
    public function stageView(){
        return view('layouts/stage');
    }
    public function index()
    {
        return view('layouts.Employe.index',['stages' => Stage::paginate(10)]);
    }
    public function listStage()
    {
        $stage = Stage::all();
        return view('layouts.Employe.stage_form',['stages' => $stage]);
    }
}
