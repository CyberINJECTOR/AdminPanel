<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');
        $token = JWTAuth::attempt($credentials);
        try {
            if(!$token) {
                return response()->json(['error' => 'invalid credentials'], 401); 
            } 
        } catch (JWTException $e) {
                return response()->json(['error' => 'Could not create token'], 500);
            }
    
        $response = compact('token');
        $response['user'] = Auth::user();
        
        return $response;
    }
}
