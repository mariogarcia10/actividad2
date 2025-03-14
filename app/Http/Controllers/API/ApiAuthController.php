<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{

    public function login(Request $request)
    {
        if(Auth::attempt(["email"=> $request->email, "password"=> $request->password])) {
            $user = Auth::user();
            $response = [];
            $response['token'] = $user->createToken('Actividad2')->plainTextToken;
            $response['name'] = $user->name;
            $response['surnames'] = $user->surnames;
            $response['age'] = $user->age;
            $response['email'] = $user->email;
            $response['role'] = $user->role;

            return response()->json([
                'status' => 200,
                'message'=> 'Ha iniciado sesión correctamente',
                'data'=> $response
            ]);
        }

        return response()->json([
            'status' => 401,
            'message'=> 'Correo y/o contraseña incorrectos',
            'data'=> null
        ]);
    }

    public function checkToken(Request $request)
    {
        return response()->json([
            'status' => 200,
            'message'=> 'Efectivamente, tiene un token válido',
            'data'=> null
        ]);
    }

}
