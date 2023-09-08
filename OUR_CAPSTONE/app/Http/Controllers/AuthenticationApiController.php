<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationApiController extends Controller
{
    public function index()
    {
        return Admin::all();
    }

    public function login(Request $request)
    {
        $validated = $request->validate(
            [
                'email' => 'required|string|',
                'password' => 'required|string|'
            ]
        );

        $admin = Admin::where('email', $validated['email'])->first();
        if (!$admin || !Hash::check($validated['password'], $admin->password)) {
            return response(
                [
                    'message' => "Bad Credential"
                ],
                401
            );
        }

        $token = $admin->createToken('myapptoken')->plainTextToken;

        return  response(
            [
                'admin' => $admin,
                'token' => $token
            ],
            200
        );
    }

    public function logout(Request $request)
    {
        $request->admin()->tokens()->delete();
        return response(['message' => 'log out successfully']);
    }
}