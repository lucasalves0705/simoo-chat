<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(){

        $userLoged = Auth::user();

        $users = User::where('id', '!=', $userLoged->id)->get();

        return response()->json([
            'users' => $users,
        ], Response::HTTP_OK);
    }
}
