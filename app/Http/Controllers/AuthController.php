<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login (Request $request)
    {
        $request->validate([
            'email' => 'required email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) { // Generate a token for the user
            $token = $user->createToken('BeritaAppToken')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'token' => $token
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
