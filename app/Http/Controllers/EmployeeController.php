<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function AddEmployee()
    {
        return view('employee');
    }

    public function AddRecord(Request $req)
    {
        $emp = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric|min:18|max:23',
            'empCity' => 'required',
            'password' => 'required|alpha_num|min:8|max:9',
        ]);

        return $req->only(['name', 'email']);
    }
}
