<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Create New User Form
    public function create()
    {
        return view('users.register');
    }

    // Store New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Redirect and Login User
        auth()->login($user);

        return redirect('/');
    }

    // Show Login Form
    public function login()
    {
        return view('users.login');
    }

    // Login User and Authenticate
    public function authenticateUser(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back();
    }

    // Logout User
    public function logout(Request $request)
    {
    }
}
