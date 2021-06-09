<?php

namespace App\Http\Controllers;
use App\Encadreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewEncadrant;



class EncadreurController extends Controller
{
    public function encadreurList()
    {
        $encadreur = Encadreur::all();
        return view('layouts.encadreur', ['encadreurs' => $encadreur]);
    }
   
    public function encadreurDetails()
    {
        $encadreur = Encadreur::all();
        return view('layouts.AdminEncadreur.encadreur', ['encadreurs' => $encadreur]);
    }
    public function edit(encadreur $encadreur)
    {
        return view('layouts.AdminEncadreur.edit', ['encadreur' => $encadreur]);
    }
    public function index()
    {
        return view('layouts.AdminEncadreur.index', ['encadreurs' => Encadreur::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.AdminEncadreur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Employe
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->validationRulesForStore());
        $encadreur = new Encadreur;
        $encadreur->first_name = $request->firstname;
        $encadreur->last_name = $request->lastname;
        $encadreur->phone_number = $request->phone;
        $encadreur->email = $request->email;
        $encadreur->specialty = $request->specialty;
        $encadreur->save();

        Mail::to($encadreur->email)->send(new NewEncadrant());

        return redirect()->route('encadreurDetails.show',$encadreur)->with('storeEncadreur', "Encadreur a été ajouté avec succès");
        
        //$employe = Employe::create($validatedData);
        //return redirect()->route('employeDetails.show',$employe)->with('storeEmploye', "Employe has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\encadreur  $encadreur
     * @return \Illuminate\Http\Response
     */
    public function show(Encadreur $encadreur)
    {
        //$employe = Employe::find($id);
        return view('layouts.AdminEncadreur.show', ['encadreur' => $encadreur]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encadreur $encadreur)
    {
        $request->validate($this->validationRules());
        //$employee->update($data);
        $encadreur->first_name = $request->firstname;
        $encadreur->last_name = $request->lastname;
        $encadreur->phone_number = $request->phone;
        $encadreur->email = $request->email;
        $encadreur->specialty = $request->specialty;
        $encadreur->save();
        return redirect()->route('employeDetails.show', $employee)->with('updateEncadreur', "Encadreur a été mis à jour avec succès");
    }

  
    public function destroy(Encadreur $encadreur)
    {
        $encadreur->delete();
        return redirect()->route('encadreurDetails.index')->with('deleteEncadreur', 'Encadreur a été supprimé!');
    }

    private function validationRules()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required',
            'specialty' => 'required',
            'email' => 'required|email',
        ];
    }
    private function validationRulesForStore()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required',
            'specialty' => 'required',
            'email' => 'required|email|unique:encadreurs',
        ];
    }
}

