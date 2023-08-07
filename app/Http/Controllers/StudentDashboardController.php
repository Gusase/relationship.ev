<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'siswa') {
            $student = $user->student;
            // Lakukan operasi lain yang diperlukan dengan data siswa
            return view('student.dashboard', compact('student'));
        } else {
            abort(404); // Atau tindakan lain jika user bukan siswa
        }
    }
}
