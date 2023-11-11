<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Register user in database
     *
     * @param CreateUserRequest $request
     * @return JsonResponse
     */
    public function signup(CreateUserRequest $request): JsonResponse
    {
        $data = $request->only(['name', 'email', 'password', 'state_id']);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        $response = [
            'error' => '',
            'token' => $user->createToken('Register_token')->plainTextToken
        ];

        return response()->json($response);
    }
    public function signin(): JsonResponse
    {
        return response()->json(['method' => 'signin']);
    }
    public function me(): JsonResponse
    {
        return response()->json(['method' => 'me']);
    }
}
