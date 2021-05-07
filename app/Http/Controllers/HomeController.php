<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $etudiant1 = Etudiant::get('prenom');
        $etudiant = Etudiant::get('email');
        return view('welcome',[
            'etudiant1'=>$etudiant1 ,

            'etudiant'=>$etudiant 

        ]);
    }
}
