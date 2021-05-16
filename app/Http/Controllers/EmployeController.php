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
        return view('layouts.AdminEmploye.adminEmploye', ['employees' => $employe]);
    }
    public function edit(Employe $employe)
    {
        return view('layouts.AdminEmploye.edit', ['employe' => $employe]);
    }
}
