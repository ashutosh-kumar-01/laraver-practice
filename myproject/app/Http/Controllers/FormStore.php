<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class FormStore extends Controller
{
    public function create()
    {
        return view('formstore');
    }

    public function store(Request $request)
    {
        Students::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'password' => $request->password,
        ]);

        return "Data Stored Successfully";
    }



    // to show data in view from mongodb database using model and controller
    public function showdata()
    {
        $students = Students::all();

        return view('showdata', compact('students'));
    }
}