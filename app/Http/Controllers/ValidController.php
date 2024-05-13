<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ValidController extends Controller
{
function index(Request $request)
{


    $users = User::where('email',$request->email)->first();
    if(!$users || Hash::check($request->password,$users->password)){
        return response([
            'message'=>["error"]
        ],404);
    }
    $token = $users->createToken('api_lara_test')->plainTextToken;
    $response = [
        'user'=>$users,
       'token'=> $token,
    ];
    return response($response,200);
}
}
