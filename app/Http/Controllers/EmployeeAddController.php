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

        $intEmpCode =  $request['employee-code'];
        $strEmpName = $request['employee-name'];
        $strCNICNo =  $request['cnic-no'];
        $strEmpFatherName = $request['employee-father-name'];
        $strPhone = $request['phone'];
        $strAddress =  $request['Address'];

        $employee = tblEmployee::find($intEmpCode);
        $employee->$intEmpCode = $intEmpCode;
        $employee->$strEmpName = $strEmpName;
        $employee->$strCNICNo = $strCNICNo;
        $employee->$strEmpFatherName = $strEmpFatherName;
        $employee->$strPhone = $strPhone;
        $employee->$strAddress = $strAddress;

        $employee->save();

        return redirect('updateemployee/');
    } 
}
