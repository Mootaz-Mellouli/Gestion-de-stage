<?php

namespace App\Http\Controllers;
use App\Stage;
use Illuminate\Http\Request;

class EmployeStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.Employe.index',['stages' => Stage::paginate(10)]);
    }
    public function listStage()
    {
        $stage = Stage::all();
        return view('layouts.Employe.stage_form',['stages' => $stage]);
    }

    public function edit(Stage $stage)
    {
        return view('layouts.Employe.edit', ['stages' => $stage]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Stage
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());
        $stage = new Stage;
        $stage->nom_societe = $request->nom_entre;
        $stage->duree = $request->duree_stage;
        $stage->type_stage = $request->type_stage;
        $stage->coordoonees = $request->coordoonees;
        $stage->sujet = $request->sujet;
        $stage->save();
        return redirect()->route('stages.index',$stage)->with('storeStage', "Stage has been added successfuly");
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stage $stage)
    {
        $request->validate($this->validationRules());
        $stage->nom_societe = $request->nom_entre;
        $stage->duree = $request->duree_stage;
        $stage->type_stage = $request->type_stage;
        $stage->coordoonees = $request->coordoonees;
        $stage->sujet = $request->sujet;
        $stage->save();
        return redirect()->route('stages.index', $stage)->with('updateStage', "Stage has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stage $stage)
    {
        $stage->delete();
        return redirect()->route('stages.index')->with('deleteStage', 'Stage has been deleted!');
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
