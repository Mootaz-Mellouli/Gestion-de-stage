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
        //dd($request->all());
        $employe = new Employe();
        $employe->first_name = $request->firstname;
        $employe->last_name = $request->lastname;
        $employe->phone_number = $request->phone;
        $employe->email = $request->email;
        $employe->password = "";
        $employe->save();
        //$request->validate($this->validationRules());
        //$employe = Employe::create($request->all());
        return redirect()->route('employeDetails.show',$employe)->with('storeEmploye', "Employe has been added successfuly");
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
        $data = $request->validate($this->validationRules());
        $employee->update($data);
        //dd($employe->all());
        /*$employe = Employe::findOrFail($id);
        $request->validate($this->validationRules()); 
        $employe->first_name = $request->firstname;
        $employe->last_name = $request->lastname;
        $employe->phone_number = $request->phone;
        $employe->email = $request->email;
        $employe->password = "";
        $employe->remember_token = null;
        $employe->save();*/
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
        //$employe = Employe::find($id);
        $employee->delete();
        return redirect()->route('employeDetails.index')->with('deleteEmploye', 'Employe has been deleted!');
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
