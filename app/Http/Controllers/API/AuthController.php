<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user ||!\Hash::check($request->password, $user->password)) {
            return response()->json([
                'massage' => 'Passwor/User Salah'
            ],401);

        }

        $token = $user->createToken('token-mine')->plainTextToken;

        return response()->json([
            'massage'   => 'Berhasil',
            'user'      =>$user,
            'token'     =>$token,
        ],200);
    }
}
