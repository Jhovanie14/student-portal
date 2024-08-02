<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'Login Successfully!');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials!');
        }
    }
    public function Register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        Auth()->login($user);

        return redirect('dashboard')->with('success', "Account successfully registered.");
    }
    public function logout()
    {
        Session::invalidate();

        Auth::logout();

        return redirect('/');
    }
}
