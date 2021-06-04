<?php

namespace App\Http\Controllers;
use App\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function entrepriseList()
    {
        $entreprise = Entreprise::all();
        return view('layouts.entreprise', ['entreprise' => $entreprise]);
    }

}

