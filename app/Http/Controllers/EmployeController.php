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
    public function edit($id)
    {

        $employe = Employe::find($id);
        return view('layouts.AdminEmploye.edit', compact('employe'));
        //return view('layouts.AdminEmploye.edit', ['employe' => $employe]);
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
        $employe = new Employe();
        $employe->first_name = $request->firstname;
        $employe->last_name = $request->lastname;
        $employe->phone_number = $request->phone;
        $employe->email = $request->email;
        $employe->password = "";
        $employe->save();
        return redirect()->route('employees.index')->with('storeEmploye', "Employe has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employe  $employe
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
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate($this->validationRules());
        $employe = Employe::find($id);
        $employe->first_name = $request->get('first_name');
        $employe->last_name = $request->get('last_name');
        $employe->phone_number = $request->get('phone_number');
        $employe->email = $request->get('email');
        $employe->save();
        return redirect()->route('employees.index')->with('updateEmploye', "Employe has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = Employe::find($id);
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
        ];
    }
}
