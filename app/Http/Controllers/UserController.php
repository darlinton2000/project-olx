<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function signup(): JsonResponse
    {
        return response()->json(['method' => 'signup']);
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
