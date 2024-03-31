<?php

use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    //return UserResource::collection(User::all());
    return new UserCollection(User::paginate(10));
});

Route::group(['prefix'=> '/V1'] , function (){
    Route::get('/register', [\App\Http\Controllers\Api\V1\AuthApiController::class , 'index']);
    Route::post('/register', [\App\Http\Controllers\Api\V1\AuthApiController::class , 'register']);
});

