<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students =  Student::with('studentClasses')->get();
        $t = "All students";
        $w = 'There are ' . $students->count() . ' Student';
        return view('admin.dashboard', compact('students', 't', 'w'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $request->validate([
            'username' => [
                'required',
                'regex:/^[a-zA-Z0-9]+(?:-?[a-zA-Z0-9]+)*$/',
                'unique:students,username',
            ],
            // Lainnya atribut yang perlu divalidasi
        ]);

        // Jika validasi berhasil, simpan data siswa ke dalam database
        $student = new Student([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            // Lainnya atribut yang perlu disimpan
        ]);
        $student->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
