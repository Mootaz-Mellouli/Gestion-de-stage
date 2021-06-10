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
}
