<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->route('admin.dashboard')->with('success','Login successfully');
        }

        return back()->with('error', 'Username or password incorrect');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
