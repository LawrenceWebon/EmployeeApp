<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $employeeId = $request->id;

        $employee = Employee::updateOrCreate(
            ['id' => $employeeId],
            [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
            ]
        );

        return Response()->json($employee);
    }
}
