<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        return view('overview', compact('totalStudents'));
    }
}
