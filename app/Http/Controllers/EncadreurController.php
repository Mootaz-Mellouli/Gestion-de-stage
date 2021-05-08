<?php

namespace App\Http\Controllers;
use App\Encadreur;
use Illuminate\Http\Request;

class EncadreurController extends Controller
{
    public function encadreurList()
    {
        $encadreur = Encadreur::all();
        return view('layouts.encadreur', ['encadreurs' => $encadreur]);
    }
}
