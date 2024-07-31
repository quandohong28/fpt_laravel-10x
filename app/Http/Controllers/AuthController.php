<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $data = $request->all();
        if (!User::create($data)) {
            return redirect()->back()->with('error', 'Register failed');
        }

        User::create($data);
        return redirect()->route('login')->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('error', 'Login failed');
        }

        return redirect()->route('admin.dashboard')->with('success', 'Login successfully');
    }

    public function logout()
    {
        Auth::logout();
            
        return redirect()->route('login');
    }
}
