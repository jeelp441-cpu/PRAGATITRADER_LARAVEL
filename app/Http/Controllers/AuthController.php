<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show register form
    public function showRegister() {
        return view('register');
    }

    // Register user
  public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->back()->with('success', 'Registered successfully');
}

    // Show login form
    public function showLogin() {
        return view('login');
    }

    // Login user
    public function login(Request $request) {

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
          return redirect()->route('home');
        }

        return back()->with('error', 'Invalid login details');
    }

    // Logout
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // back to index
}
}
