<?php

namespace App\Http\Controllers;
use App\EntrepriseStage;
use Illuminate\Http\Request;

class EntrepriseStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.Entreprise.index',['entrepriseStages' => EntrepriseStage::paginate(10)]);
    }
    public function listeEntrepriseStage()
    {
        $stage = Stage::all();
        return view('layouts.Entreprise.eS_form',['entrepriseStages' => $entrepriseStage]);
    }

    public function edit(EntrepriseStage $entrepriseStage)
    {
        return view('layouts.Entreprise.edit', ['entrepriseStage' => $entrepriseStage]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Entreprise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\EntrepriseStage
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());
        $entrepriseStage = new Stage;
        $staentrepriseStagege->nom_societe = $request->nom_entre;
        $entrepriseStage->duree = $request->duree_stage;
        $entrepriseStage->type_stage = $request->type_stage;
        $entrepriseStage->coordoonees = $request->coordoonees;
        $entrepriseStage->sujet = $request->sujet;
        $entrepriseStage->save();
        return redirect()->route('entrepriseStages.index',$entrepriseStage)->with('storeEntrepriseStage', "Stage has been added successfuly");
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntrepriseStage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntrepriseStage $entrepriseStage)
    {
        $request->validate($this->validationRules());
        $entrepriseStage->nom_societe = $request->nom_entre;
        $entrepriseStage->duree = $request->duree_stage;
        $entrepriseStage->type_stage = $request->type_stage;
        $entrepriseStage->coordoonees = $request->coordoonees;
        $entrepriseStage->sujet = $request->sujet;
        $entrepriseStage->save();
        return redirect()->route('entrepriseStages.index', $entrepriseStage)->with('updateEntrepriseStage', "Stage has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntrepriseStage $entrepriseStage)
    {
        $stage->delete();
        return redirect()->route('entrepriseStages.index')->with('deleteEntrepriseStage', 'Stage has been deleted!');
    }


    private function validationRules()
    {
        return [
            'nom_entre' => 'required|min:2',
            'duree_stage' => 'required|min:2',
            'type_stage' => 'required',
            'coordoonees' => 'required',
        ];
    }

}
