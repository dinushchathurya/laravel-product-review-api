<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ___construct()
    {
        $this->middleware('auth')->except(['register', 'login']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|string|unique:user',
            'password'=> 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only(['email' , 'password']);
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Invalid Credentials'], 401);
        }
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory->getTTL() * 60
        ]);
    }

    /* Get the authenticated user */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /* Logout user */
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully Logout']);
    }
}
