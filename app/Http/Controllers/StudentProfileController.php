<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreStudentProfileRequest;
use App\Http\Requests\UpdateStudentProfileRequest;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'siswa' && $user->role) {
            $student = $user->student;
            // Lakukan operasi lain yang diperlukan dengan data siswa
            return view('student.profile', compact('student'));
        }
        abort(404); // Atau tindakan lain jika user bukan siswa
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
    public function store(StoreStudentProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentProfileRequest $request, StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentProfile $studentProfile)
    {
        //
    }
}
