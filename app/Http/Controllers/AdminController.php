<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $students = Student::with('studentClasses')->paginate(10);
        // $w = 'There are ' . $students->count() . ' Student';
        return view('admin.dashboard', compact('students'));
    }

    public function show($username)
    {
        $username = str_replace('-', '.', $username);
        // dd($username);
        $student = Student::with('studentClasses')
            ->where('username', 'LIKE', '%' . $username . '%')
            ->first();

        if ($student) {
            return view('profile.index', compact('student'));
        }

        return view('errors.403', ['message' => "What's this? Looking for <b>$username</b> ? There's nothing here!"]);
    }

    public function indexTeacher()
    {
        // $students = Student::with('studentClasses')->paginate(10);
        // $w = 'There are ' . $students->count() . ' Student';
        return view('admin.teachers.index');
    }
}
