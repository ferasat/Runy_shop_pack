<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @OA\Info(
 *     version="1.0",
 *     title="Runy Shop Api List"
 * )
 * @OA\PathItem(path="/api/v1")
 */
class BaseController extends Controller
{
    public function errorMessage (){

    }

    public function loginMessage (){

    }
}
