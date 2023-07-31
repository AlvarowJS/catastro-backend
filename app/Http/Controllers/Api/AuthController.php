<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            $token = $user->createToken('MyApp')->plainTextToken;
            $id_user = $user->id;
            $role_id = $user->role_id;
            return response()->json([
                'token' => $token,
                'id_user' => $id_user,
                'role_id' => $role_id,
            ]);

        } else {
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }
    }
    public function register(Request $request)
    {
        $user = User::create([
            'nombres' => $request->nombres,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1
        ]);
        return response()->json([
            'message' => 'Usuario creado exitosamente.',
            'user' => $user,
        ], 201);
    }
}
