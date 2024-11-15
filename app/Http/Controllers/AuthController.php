<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth_files.register');
    }

    public function login()
    {
        return view('auth_files.login');
    }

    public function login_user(string $id)
    {
        $user = User::findOrFail($id);
        return redirect(route('contact'))->with('user', $user);
    }

    public function register_user(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect(route('contact'));
    }
}
