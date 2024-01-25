<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
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
        $employees = Employee::all();

        $data = [
            'employees' => $employees
        ];

        return view('admin.employee.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = Division::all();
        $positions = Position::all();
        $data = [
            'title' => 'Add New Employee',
            'divisions' => $divisions,
            'positions' => $positions
        ];

        return view('admin.employee.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Employee::class],
            'phone' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'division_id' => ['required'],
            'position_id' => ['required'],
        ];

        $validatedReq = $request->validate($rules);
        $employee = new Employee;

        $employee->firstname = $validatedReq['firstname'];
        $employee->lastname = $validatedReq['lastname'];
        $employee->email = $validatedReq['email'];
        $employee->phone = $validatedReq['phone'];
        $employee->date_of_birth = $validatedReq['date_of_birth'];
        $employee->gender = $validatedReq['gender'];
        $employee->address = $validatedReq['address'];
        $employee->division_id = $validatedReq['division_id'];

        $employee->save();

        $pos = Position::find($validatedReq['position_id']);
        $employee->positions()->attach($pos,['employee_id' => $employee->id,'start_date'=> '2024-01-04']);
        $employee->save();

        return redirect()->route('admin.employee.index');
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
