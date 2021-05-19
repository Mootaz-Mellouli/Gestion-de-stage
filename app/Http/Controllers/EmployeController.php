<?php

namespace App\Http\Controllers;
use App\Employe;
use Illuminate\Http\Request;

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
    public function edit(Employe $employe)
    {
        return view('layouts.AdminEmploye.edit', ['employe' => $employe]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate($this->validationRules());
        $employe = Employe::create($validatedData);

        return redirect()->route('layouts.AdminEmploye.show', $employe)->with('storeEmploye', "Employe has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return view('layouts.AdminEmploye.show', ['employe' => $employe]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        $validatedData = $request->validate($this->validationRules());
        $employe->update($validatedData);
        return redirect()->route('employees.show', $employe)->with('updateEmploye', "Employe has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employees.index')->with('deleteEmploye', 'Employe has been deleted!');
    }

    private function validationRules()
    {
        return [
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ];
    }
}
