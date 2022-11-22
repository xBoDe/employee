@extends('layout')
@section('content')
        <div class="mt-10 md:mt-0">
                <div class="mt-5 md:col-span-4 md:mt-0">
                    <form action="/update" method="POST">
                        @csrf
                        <div class="overflow-hidden shadow md:rounded-md">
                            <div class="bg-white px-4 py-5 md:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 md:col-span-3">
                                        <label for="employee-code" class="block text-md font-medium text-gray-700">Employee Code</label>
                                        <input value="{{ $employee['intEmpCode'] }}" type="text" name="employee-code" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-500 focus:ring-indigo-500 md:text-md">
                                    </div>

                                    <div class="col-span-6 md:col-span-3">
                                        <label for="employee-name" class="block text-md font-medium text-gray-700">Employee Name</label>
                                        <input value="{{ $employee['strEmpName'] }}" type="text" name="employee-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-500 focus:ring-indigo-500 md:text-md">
                                    </div>

                                    <div class="col-span-6 md:col-span-3">
                                        <label for="cnic-no" class="block text-md font-medium text-gray-700">CNIC No.</label>
                                        <input value="{{ $employee['strCNICNo'] }}" type="text" name="cnic-no" id="cnic-no"  class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-500 focus:ring-indigo-500 md:text-md">
                                    </div>

                                    <div class="col-span-3">
                                        <label for="employee-father-name" class="block text-md font-medium text-gray-700">Employee Father Name</label>
                                        <input value="{{ $employee['strEmpFatherName'] }}" type="text" name="employee-father-name" id="street-address" autocomplete="employee-father-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-500 focus:ring-indigo-500 md:text-md">
                                    </div>

                                    <div class="col-span-3">
                                        <label for="Address" class="block text-md font-medium text-gray-700">Address</label>
                                        <input value="{{ $employee['strAddress'] }}" type="text" name="Address" id="Address" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-500 focus:ring-indigo-500 md:text-md">
                                    </div>

                                    <div class="col-span-3">
                                        <label for="phone" class="block text-md font-medium text-gray-700">Phone</label>
                                        <input value="{{ $employee['strPhone'] }}" type="text" name="phone" id="phone" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:border-indigo-500 focus:ring-indigo-500 md:text-md">
                                    </div>

                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right md:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-md font-medium text-white shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

