<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CollegeStudentController extends Controller
{
    // CREATE
    public function create()
    {
        DB::table('students')->insert([
            'name' => 'Rahul',
            'regno' => '101',
            'number' => '9876543210',
            'batch' => '2023',
            'course' => 'BCA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return "Student Added";
    }

    // READ
    public function index()
    {
        return DB::table('students')->get();
    }

    // UPDATE
    public function update($id)
    {
        DB::table('students')
            ->where('id', $id)
            ->update([
                'course' => 'MCA',
                'updated_at' => now(),
            ]);

        return "Student Updated";
    }

    // DELETE
    public function delete($id)
    {
        DB::table('students')
            ->where('id', $id)
            ->delete();

        return "Student Deleted";
    }
}