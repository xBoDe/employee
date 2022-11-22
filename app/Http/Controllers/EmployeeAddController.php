<?php

namespace App\Http\Controllers;

use App\Models\tblEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeAddController extends Controller
{
    public function index()
    {
        return view('employee_add');
    }

    public function add(Request $request)
    {

        $employee = [
            'intEmpCode' => $request['employee-code'],
            'strEmpName'=> $request['employee-name'],
            'strCNICNo'=> $request['cnic-no'],
            'strEmpFatherName'=> $request['employee-father-name'],
            'strPhone'=> $request['phone'],
            'strAddress'=> $request['Address'],
        ];
        tblEmployee::insert($employee);
        return response($request);
    }
    public function destroy(Request $request,$id){
        tblEmployee::where('intEmpCode',$id)->delete();
        
        return redirect('Employees/');
        
    }
    public function update(Request $request,$id){
       $employee = tblEmployee::find($id);

        return view('updateemployee')->with('employee',$employee);
    }   
    public function updatedData(Request $request)
    {
        $code = $request['employee-code'];
        $name = $request['employee-name'];
        $cnic = $request['cnic-no'];
        $father = $request['employee-father-name'];
        $address = $request['Address'];
        $phone = $request['phone'];

        $employee = tblEmployee::find($code);

        
        $employee->strEmpName = $name;
        $employee->strCNICNo = $cnic;
        $employee->strEmpFatherName = $father;
        $employee->strPhone = $address;
        $employee->strAddress = $phone;

        $employee->save();

        return redirect('Employees/');
    }
}
