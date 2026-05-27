<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function insert(){
        Student::create([
            'name' => 'Ankit',
            'email' => 'nNp8D@example.com',
            'course' => 'Laravel'
        ]);

        return "Inserted";
    }

    public function read(){
        return Student::all();
    }

    public function update($id){
        Student::find($id)->update([
            'course' => 'Full Stack'
        ]);

        return "Updated";
    }

    public function delete($id){
        Student::find($id)->delete();
        return "Deleted";
    }
}