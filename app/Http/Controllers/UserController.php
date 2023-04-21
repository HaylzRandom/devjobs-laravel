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
        // dd($request);
        $formFields = $request->validate([
            'forename' => ['required', 'min:3'],
            'surname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Redirect and Login User
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
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

            return redirect('/')->with('message', 'You have successfully logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Logout User
    public function logout(Request $request)
    {
        // Remove authentication information from user session
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have now been logged out successfully');
    }

    // Show Profile
    public function edit()
    {
        return view('users.edit', ['user' => auth()->user()]);
    }

    // Update Edited User
    public function update(Request $request, User $user)
    {
        // TODO - Check current user is owner of user before editing

        // $formFields = $request->validate([
        //     'forename' => 'required',
        //     'surname' => 'required',
        // ]);

        // Check if password has been changed
        // if ($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }
        // if ($request->filled('forename')) {
        //     // $formFields = $request->validate([
        //     //     'password' => ['required', 'confirmed', 'min:6']
        //     // ]);

        //     $formFields = $request->validate([
        //         'forename' => 'required',
        //         'surname' => 'required',
        //     ]);
        // }

        // $user->update($formFields);

        // return redirect('/')->with('message', 'User updated successfully!');
    }

    // TODO - Create function to delete User
}
