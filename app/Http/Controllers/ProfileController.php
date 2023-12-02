<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);
        User::where('username', Auth::user()->username)->update($data);

        return redirect('/user/profile');
    }
}
