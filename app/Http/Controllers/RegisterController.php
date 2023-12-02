<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $requestValidated = $request->validate([
            'nama' => 'required|min:8|max:255',
            'email' => 'required|email:dns|min:8|max:255|unique:users',
            'username' => 'required|min:8|max:40|unique:users',
            'password' => 'required|min:8',
        ]);
        User::create($requestValidated);

        return redirect('/auth/login')->with('success', 'Registration Successfull!! Please Login');
    }
}
