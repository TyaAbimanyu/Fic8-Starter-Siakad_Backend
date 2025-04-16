<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        throw ValidationException::withMessages(['email'=> ['User not found']]);
    }
    if (!Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages(['password'=> ['Incorrect password']]);
    }

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'message' => 'Login successful',
        'token' => $token,
        'user' => $user,
    ]);
  }

  public function logout(Request $request)
  {
    $request->user()->tokens()->delete();
    return response()->json([
        'message' => 'Logout successful',
    ]);
  }
}
