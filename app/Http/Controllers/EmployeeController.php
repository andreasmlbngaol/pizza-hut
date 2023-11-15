<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use App\Models\District;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->username !== 'admin') {
            $employees = Employee::where('user_id', '=', auth()->user()->id)->orderBy('name')->get();
        } else {
            $employees = Employee::orderBy('name')->get();
        }
        return view('employees.index', [
            'employees' => $employees,
            'title' => 'Employees', 
            'active' => 'Employees'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create', [
            'title' => 'Add Employee',
            'active' => 'Employees',
            'users' => User::all(),
            'areas' => Area::all(),
            'districts' => District::all(),
            'positions' => Position::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
