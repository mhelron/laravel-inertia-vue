<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users','max:255'],
            'password' => ['required', 'confirmed'],
        ]);

        // Register
        $user = User::create($fields);

        // Login
        Auth::login($user);

        // Redirect
        return redirect()->route('home');
    }
}
