<?php

namespace App\Http\Controllers;

use App\Models\RunySliderPic;
use Illuminate\Http\Request;

class RunySliderVueController extends Controller
{
    public function index()
    {

    }
    public function pics(Request $request)
    {
        $sliderImg = RunySliderPic::query()->get();
        return response()->json($sliderImg);
    }
}
