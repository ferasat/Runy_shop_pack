<?php

namespace RunySliderB5\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RunySliderB5\Models\RunySliderB5;

class RunySliderB5Controller extends Controller
{
    public function index()
    {
        return view('RunySliderView::runySliderIndex');
    }

    public function create()
    {
        $newSlide = new RunySliderB5();
        $newSlide->name = 'بدون نام';
        $newSlide->slug = time().rand(1,99);
        $newSlide->save();

        return redirect('/dashboard/runy-slider/edit/'.$newSlide->id);
    }

    public function edit(RunySliderB5 $id)
    {
        return view('RunySliderView::runySliderEdit' , ['slide'=>$id]);
    }

    public function update(Request $request, RunySliderB5 $runySliderB5)
    {
        //
    }

    public function destroy(RunySliderB5 $runySliderB5)
    {
        //
    }
}
