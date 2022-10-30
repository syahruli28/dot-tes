<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // api login
    // route untuk login dan generate dan tambah tokennya ke tb
    public function login(Request $request)
    {
        // tampung data user sesuai data email atau password yang dikirm
        $user = User::where('email', $request->email)->first();
        // jika tidak ada data user atau password tidak sesuai, tampilkan error
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401); // tampilkan kodenya 401
        }
        // jika data user ada, generate token
        $token = $user->createToken('token')->plainTextToken;
        // lalu tampilkan pesan 
        return response()->json([
            'message' => 'Success',
            'user' => $user,
            'token' => $token
        ], 200); // tampilkan kodenya 200
    }

    // route untuk logout dan hapus tokennya dari tb
    public function logout(Request $request)
    {
        $user = $request->user(); // ambil data user yang login
        $user->currentAccessToken()->delete(); // hapus tokennya sebelum logout
        return response()->json([
            'message' => 'Success Logout'
        ], 200);
    }
}
