<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $t = 'Register';
        $w = 'Register';
        $roles = [
            User::ROLE_ADMIN,
            User::ROLE_GURU,
            User::ROLE_SISWA,
        ];

        return view('auth.reg', compact('t', 'w', 'roles'));
    }
    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:100',
            'username' => [
                'required',
                'regex:/^[a-zA-Z0-9]+(?:-?[a-zA-Z0-9]+)*$/',
                'unique:users,username',
            ],
            'password' => 'required|min:3',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}
