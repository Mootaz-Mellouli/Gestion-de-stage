<?php

namespace App\Http\Controllers;
use App\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class EmployeController extends Controller
{
    public function employeList()
    {
        $employe = Employe::all();
        return view('layouts.employe', ['employees' => $employe]);
    }
    public function employeDetails()
    {
        $employe = Employe::all();
        return view('layouts.AdminEmploye.employe', ['employees' => $employe]);
    }
    public function edit(Employe $employee)
    {
        return view('layouts.AdminEmploye.edit', ['employe' => $employee]);
    }
    public function index()
    {
        return view('layouts.AdminEmploye.index', ['employees' => Employe::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.AdminEmploye.create');
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
        $employe = new Employe;
        $employe->first_name = $request->firstname;
        $employe->last_name = $request->lastname;
        $employe->phone_number = $request->phone;
        $employe->email = $request->email;
        $employe->salaire = $request->salaire;
        $employe->save();
        return redirect()->route('employeDetails.show',$employe)->with('storeEmploye', "Employe has been added successfuly");
    
        //$employe = Employe::create($validatedData);
        //return redirect()->route('employeDetails.show',$employe)->with('storeEmploye', "Employe has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employee)
    {
        //$employe = Employe::find($id);
        return view('layouts.AdminEmploye.show', ['employe' => $employee]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employee)
    {
        $request->validate($this->validationRules());
        //$employee->update($data);
        $employee->first_name = $request->firstname;
        $employee->last_name = $request->lastname;
        $employee->phone_number = $request->phone;
        $employee->email = $request->email;
        $employee->salaire = $request->salaire;
        $employee->save();
        return redirect()->route('employeDetails.show', $employee)->with('updateEmploye', "Employe has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employee)
    {
        $employee->delete();
        return redirect()->route('employeDetails.index')->with('deleteEmploye', 'Employe has been deleted!');
    }

    private function validationRules()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required',
            'salaire' => 'required',
            'email' => 'required|email',
        ];
    }
    private function validationRulesForStore()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required',
            'salaire' => 'required',
            'email' => 'required|email|unique:employes',
        ];
    }
}
