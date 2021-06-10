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
    public function entrepriseDetails()
    {
        $entreprise = Entreprise::all();
        return view('layouts.AdminEncadreur.entreprise', ['entreprise' => $entreprise]);
    }
    public function edit(entreprise $entreprise)
    {
        return view('layouts.AdminEntreprise.edit', ['entreprise' => $entreprise]);
    }
    public function index()
    {
        return view('layouts.AdminEntreprise.index', ['entreprise' => Entreprise::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.AdminEntreprise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Entreprise
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->validationRulesForStore());
        $entreprise = new Entreprise;
        $entreprise->nom = $request->nom;
        $entreprise->prenom = $request->prenom;
        $entreprise->nomEntreprise = $request->nomEntreprise;
        $entreprise->emailEntreprise = $request->emailEntreprise;
        $entreprise->email = $request->email;
        $entreprise->save();

        

        return redirect()->route('entrepriseDetails.show',$entreprise)->with('storeEntreprise', "Entreprise a été ajouté avec succès");
        
        //$entreprise = Entreprise::create($validatedData);
        //return redirect()->route('entrepriseeDetails.show',$entreprise)->with('storeEntreprise', "Entreprise has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //$entreprise = Entreprise::find($id);
        return view('layouts.AdminEntreprise.show', ['entreprise' => $entreprise]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $request->validate($this->validationRules());
        //$entreprise->update($data);
        $entreprise->nom = $request->nom;
        $entreprise->prenom = $request->prenom;
        $entreprise->nomEntreprise = $request->nomEntreprise;
        $entreprise->emailEntreprise = $request->emailEntreprise;
        $entreprise->email = $request->email;
        $entreprise->save();
        return redirect()->route('entrepriseDetails.show', $entreprise)->with('updateEntreprise', "Entreprise a été mis à jour avec succès");
    }

  
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return redirect()->route('entrepriseDetails.index')->with('deleteEntreprise', 'Entreprise a été supprimé!');
    }

    private function validationRules()
    {
        return [
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
            'nomEntreprise' => 'required|min:2',
            'emailEntreprise' => 'required|email',
            'email' => 'required|email',
        ];
    }
    private function validationRulesForStore()
    {
        return [
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
            'nomEntreprise' => 'required|min:2',
            'emailEntreprise' => 'required|email',
            'email' => 'required|email|unique:entreprises',
        ];
    }

}

