<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Create user
    public function register() {
        return view('users.register');
    }

    // Store user
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/listings')->with('message', 'You are logged!');
    }

    // Logout user
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->with('message', 'Logged out');
    }

    // Log in user
    public function login() {
        return view('users.login');
    }

    // Authenticate user
    public function authenticate(Request $request)  {
 
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/listings');
        }

        return back()->withErrors(['email' => 'Invalid Credentials!'])->onlyInput('email');

    }
}
