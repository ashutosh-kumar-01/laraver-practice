<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFormController extends Controller
{
    public function showForm() {
        return view('studentForm');
    }

    public function submitForm(Request $request){

        $request->validate([
            'name' => 'required|min:3|max:20|regex:/^[a-zA-Z ]+$/',
            'age' => 'required|integer|min:1|max:100',
            'course' => 'required'
        ],[
            'name.min'=>"Minimum 3 character required",
            'name.max'=>"You cannot enter more than 20 character",
            'name.regex'=>'Only characters and spaces are allowed',
            
            'age.required' => 'Age is required',
            'age.integer' => 'Age must be a number',
            'age.min' => 'Age must be at least 1',
            'age.max' => 'Age cannot be more than 100',
            
        ]);
        return "Form Submitted successfully";
    }
}