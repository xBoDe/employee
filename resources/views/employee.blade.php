@extends('layout')
@section('content')
    <div class="overflow-x-auto relative">
        <table id="table_id" class="display table table-dark table-striped">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Employee Code
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    CNIC
                </th>
                <th scope="col" class="py-3 px-6">
                    Father Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone
                </th>
                <th scope="col" class="py-3 px-6">
                    Address
                </th>
                <th scope="col" class="py-3 px-6">
                    Manager
                </th>
                <th scope="col" class="py-3 px-6">
                    Department
                </th>
                <th scope="col" class="py-3 px-6">
                    Actoins
                </th>

            </tr>
            </thead>
            <tbody>
            @isset($employees)
                @foreach($employees as $employee)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6">
                            {{$employee['intEmpCode']}}
                        </th>
                        <td class="py-4 px-6">
                            {{$employee['strEmpName']}}
                        </td>
                        <td class="py-4 px-6">
                            {{$employee['strCNICNo']}}
                        </td>
                        <td class="py-4 px-6">
                            {{$employee['strEmpFatherName']}}
                        </td>
                        <td class="py-4 px-6">
                            {{$employee['strPhone']}}
                        </td>
                        <td class="py-4 px-6">
                            {{$employee['strAddress']}}
                        </td>
                        <td class="py-4 px-6">
                            {{$employee['intDepartmentCode']}}
                        </td>
                        <td class="py-4 px-6">
                            {{$employee['intEmpManagerCode']}}
                        </td>
                        <td class="py-4 px-6">
                             <a href="DeleteEmployees/{{ $employee['intEmpCode'] }}">Delete</a>
                             
                             <a href="updateEmployees/{{ $employee['intEmpCode'] }}">update</a>
                        </td>
                                                
                    </tr>
                @endforeach
            @endisset

            </tbody>
        </table>
    </div>
@endsection

