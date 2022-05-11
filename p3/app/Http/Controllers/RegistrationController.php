<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegistrationController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);

        Auth()->login($user);

        return redirect('/search')->with('flash-alert', 'Registration successful!');
    }

    public function login() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        if (Auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/search')->with('flash-alert', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid login credentials.'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        redirect('/')->with('flash-alert', 'You are logged out. Hope to see you again!');
    }
}
