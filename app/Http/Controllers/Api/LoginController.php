<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{  
        public function __invoke(Request $request)
        {
            // set validasi
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required'
            ]);
    
            // jika validasi gagal
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
    
            // dapatkan kredensial dari permintaan
            $credentials = $request->only('username', 'password');
    
            // jika autentikasi gagal
            if (!$token = auth()->guard('api')->attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Username atau Password Anda salah'
                ], 401);
            }
    
            // jika autentikasi berhasil
            return response()->json([
                'success' => true,
                'user' => auth()->user(),
                'token' => $token
            ], 200);
        }
    }
    

