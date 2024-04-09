<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Resources\V1\RegisterResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthApiController extends BaseController
{
    public function index()
    {
        return response()->json([
            date('index')
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'family' => 'required|string|min:3',
            'cellPhone' => 'required|string|min:9',
            'email' => 'required|email|min:3',
            'password' => 'required|string|min:8',
        ]);

        /*        if (!auth()->attempt($data)){
                    return response([
                       'data'=>[
                           'message'=> 'ثبت نشد',
                       ]
                    ] , 404);
                }*/


        $user = new User();
        $user->name = $request->name;
        $user->family = $request->family;
        $user->cellPhone = $request->cellPhone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $token = $user->createToken('RunyShop')->accessToken;
        dd($token);

        auth()->loginUsingId($user->id);

        return new RegisterResource($user);

    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('RunyShop')->plainTextToken;
            $user->token = $token;
            $user->save();

            return response()->json([
                'data' => [
                    'name' => $user->name,
                    'family' => $user->family,
                    'email' => $user->email,
                    'token' => $user->token
                ]
            ], 200);
        } else {
            return response()->json([
                'data' => [
                    'message' => 'دسترسی ندارید',
                    'status' => 'success',
                ]
            ], 403);
        }
    }
}
