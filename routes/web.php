<?php

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminTeacherController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\TeacherSubjectsController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\StudentAssignmentsController;
use App\Http\Controllers\TeacherAssignmentsController;
use App\Http\Controllers\StudentGradesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// redirect
Route::redirect('/login', 'auth/login');
// 

Route::get('/', [OverviewController::class, 'index'])->name('dashboard');

Route::middleware(['guest'])->group(function () {
  Route::prefix('auth')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'create']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
  });
});

Route::middleware(['auth'])->group(function () {
  Route::get('/logout', [LoginController::class, 'showLogout'])->name('logout');
  Route::post('/logout', [LoginController::class, 'logout']);
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
  Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
  Route::get('s/{username}', [AdminController::class, 'show'])->name('profile.show');

  Route::prefix('students')->group(function () {
    Route::get('/', [AdminStudentController::class, 'index'])->name('admin.students.index');
    Route::get('create', [AdminStudentController::class, 'create'])->name('admin.students.create');
    Route::get('{student}/edit', [AdminStudentController::class, 'edit'])->name('admin.students.edit');
  });

  Route::prefix('teachers')->group(function () {
    Route::get('/', [AdminController::class, 'indexTeacher'])->name('admin.teachers.index');
    Route::get('create', [AdminTeacherController::class, 'create'])->name('admin.teachers.create');
    Route::get('{teacher}/edit', [AdminTeacherController::class, 'edit'])->name('admin.teachers.edit');
  });
});

// Teacher Routes
Route::prefix('teacher')->middleware(['auth', 'role:guru'])->group(function () {
  Route::get('dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');

  Route::prefix('subjects')->group(function () {
    Route::get('/', [TeacherSubjectsController::class, 'index'])->name('teacher.subjects.index');
    Route::get('create', [TeacherSubjectsController::class, 'create'])->name('teacher.subjects.create');
    Route::get('{subject}/edit', [TeacherSubjectsController::class, 'edit'])->name('teacher.subjects.edit');
  });

  Route::prefix('assignments')->group(function () {
    Route::get('/', [TeacherAssignmentsController::class, 'index'])->name('teacher.assignments.index');
    Route::get('create', [TeacherAssignmentsController::class, 'create'])->name('teacher.assignments.create');
    Route::get('{assignment}/edit', [TeacherAssignmentsController::class, 'edit'])->name('teacher.assignments.edit');
  });
});

// Student Routes
Route::prefix('s')->middleware(['auth', 'role:siswa'])->group(function () {
  Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
  Route::get('profile', [StudentProfileController::class, 'index'])->name('student.profile');
  Route::prefix('assignments')->group(function () {
    Route::get('/', [StudentAssignmentsController::class, 'index'])->name('student.assignments.index');
    Route::post('submit', [StudentAssignmentsController::class, 'submit'])->name('student.assignments.submit');
  });
  Route::get('grades', [StudentGradesController::class, 'index'])->name('student.grades');
});
// Route::get('/dashboard', function () {
//   $t = 'Dashboard';
//   $username = Auth::user()->username ?? 'Asuka';
//   $w = 'Welcome ' . $username;
//   return view('student.dashboard', compact('t', 'w'));
// });

// Route::get('/settings', function () {
//   $t = 'Settings';
//   $student = Student::with('studentClasses')->where('username', 'LIKE', "%shota00%")->first();
//   return view('profile.edit', compact('t', 'student'));
// })->name('settings');
