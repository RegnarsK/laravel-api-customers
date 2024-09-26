<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
            $fields = $request->validate([
                'name' => 'required|max:255',
                'email'=> 'required|email|unique:users',
                'password'=> 'required|confirmed'
            ]);

            User::create($fields);

            $token = $user->createToken($request->name);

            return [
                'user' => $user,
                'token' => $token,

            ];
        }

    public function login(){
            return 'login';
    }

    public function logout(){
            return 'logout';
    }
}
