<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students =  Student::with('studentClasses')->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        // Logic to display a form for creating a new student
    }

    public function edit($student)
    {
        // Logic to display a form for editing a student's information
    }
}
