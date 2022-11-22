<?php

namespace App\Http\Controllers;

use App\Models\tblEmployee;

class EmployeeListController extends Controller
{
    public function index()
    {
        return view('employee',["employees" => tblEmployee::all()]);
    }
}
