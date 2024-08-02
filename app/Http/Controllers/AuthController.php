<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {

        $credentials = $request->only('username', 'password');

        if (!Auth::attempt($credentials, $request->has('remember'))) {
            return back()->with('error', 'Username or password incorrect');
        }
        
        return redirect()->route('admin.dashboard')->with('success', 'Login successfully');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $data = $request->all();
        $user = User::create($data);
        if (!$user) {
            return redirect()->back()->with('error', 'Register failed');
        }

        return redirect()->route('auth.login')->with('success', 'Register successfully');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
