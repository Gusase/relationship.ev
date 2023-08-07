<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function redirectTo()
    {
        if (Auth::user()->role == 'admin') {
            return '/admin/dashboard';
        } elseif (Auth::user()->role == 'teacher') {
            return '/teacher/dashboard';
        } else {
            return '/dashboard';
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        App::setLocale('id');

        $request->validated();

        if ($request->username === $request->password) {
            return redirect()->back()
                ->withInput($request->only('username'))
                ->withErrors(['invalid' => 'Hah, sama saja username dan passwordmu? Bodoh...']);
        }

        $columns = $request->only('username', 'password');

        if (Auth::attempt($columns)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->role == 'teacher') {
                return redirect('/teacher/dashboard');
            } else {
                return redirect('/');
            }
        }

        return redirect()->back()->withInput($request->only('username'))->withErrors(['invalid' => 'Tsk, username dan passwordmu salah.']);
    }
    public function showLogout()
    {
        if (Auth::check()) {
            return view('auth.logout');
        }

        return redirect('/  ')->with('error', 'You need to be logged in to access the logout page.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
