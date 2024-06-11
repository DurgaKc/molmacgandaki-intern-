<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('designation','department')->orderBy('position')->get();

        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designations = Designation::latest()->get();
         $departments = Department::latest()->get();
        return view('admin.employee.create',compact('designations','departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        // dd($request->all());

        Employee::create($request->validated());
        toast('added Sucessfully','success');

        return Redirect(route('admin.employee.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    public function edit(Employee $employee)
    {
        $designations = Designation::latest()->get();
        $departments = Department::latest()->get();

        return view('admin.employee.edit',compact('employee','designations','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        // dd($request->all());

        $employee->update($request->validated());
        return Redirect(route('admin.employee.index',compact('employee')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.employee.index'));
    }
}
