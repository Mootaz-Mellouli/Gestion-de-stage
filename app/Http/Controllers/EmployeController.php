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
}
