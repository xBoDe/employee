<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});
Route::get('Employees/', [\App\Http\Controllers\EmployeeListController::class,'index']);
Route::get('EmployeesAdd/', [\App\Http\Controllers\EmployeeAddController::class,'index']);
Route::post('EmployeesAdd/', [\App\Http\Controllers\EmployeeAddController::class,'add']);

Route::get('DeleteEmployees/{id}', [\App\Http\Controllers\EmployeeAddController::class,'destroy']);
Route::get('updateEmployees/{id}', [\App\Http\Controllers\EmployeeAddController::class,'update']);
Route::post('updatedData/', [\App\Http\Controllers\EmployeeAddController::class,'updatedData']);


