<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signIn(SignInRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json($user, 200);
        }
        return response()->json(["logged_in" => false, "message" => "Usuario no encontrado"], 401);
    }

    public function signUp(SignUpRequest $request)
    {
        $created = User::create($request->all());
        return response()->json($created, 201);
    }
}
