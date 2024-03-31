<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Resources\V1\RegisterResource;
use App\Models\User;
use Illuminate\Http\Request;

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
        $data = $this->validate($request , [
           'name' => 'required|string|main:3',
           'family' => 'required|string|main:3',
           'cellPhone' => 'required|string|main:9',
           'email' => 'required|email|main:3',
           'password' => 'required|string|main:8',
        ]);

        if (!auth()->attempt($data)){
            return response([
               'data'=>[
                   'message'=> 'ثبت نشد',
               ]
            ] , 404);
        }

        $user = new User();
        $user->name = $request->name ;
        $user->family = $request->family ;
        $user->cellPhone = $request->cellPhone ;
        $user->email = $request->email ;
        $user->password = bcrypt($request->password) ;
        $user->save() ;

        auth()->loginUsingId($user->id);

        return new RegisterResource($user);

    }

    public function login(Request $request)
    {

    }
}
