<?php

namespace App\Http\Controllers;

use App\Events\EmployeeCreated;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = \App\Models\Employee::with(['employeeProfile', 'allowance', 'tags'])->orderBy('id', 'desc')->paginate();
        return view('employees.index')->with(compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $employee = new Employee($request->all());
        if ($employee->save()) {

            event(new EmployeeCreated($employee));
        }

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::with('images')->find($id);

        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
