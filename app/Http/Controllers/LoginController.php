<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function response;

class LoginController extends Controller
{
    public function  login(Request $request){

        $credentials = $request->only('email', 'password');

        if(!Auth::attempt($credentials)){
            return response([
                "message" => "Usuario y/o contraseña invalido"
            ], 401);
        }

        $user = Auth::user();
        $accessToken = $user->createToken('Token Name')->accessToken;

        return response([
            "user" => Auth::user(),
            "access_token" => $accessToken
        ]);
    }
}
