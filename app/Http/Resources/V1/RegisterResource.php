<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    public function toArray(Request $request)
    {
        //return parent::toArray($request);
        return response()->json([
            'data'=>[
                'name'=>$request->name ,
                'family'=>$request->family ,
                'email'=>$request->email ,
                'token'=>$request->token ,
                'cellPhone'=>$request->cellPhone
            ]
        ]);
    }
}
