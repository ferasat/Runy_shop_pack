<?php

namespace Poll\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Poll\Models\Poll;
use Poll\Models\PollQuestionTemplate;
use Poll\Models\PollTemplate;

class PollTemplateController extends Controller
{
    public function index()
    {
        $titlePage = 'نظرسنجی';
        return view('PollView::PollTemp.indexPollTemp', compact('titlePage'));
    }
    public function create()
    {
        $newPoll = new PollTemplate();
        $newPoll->name = 'بدون عنوان';
        $newPoll->creator_user_id=Auth::id();
        $newPoll->save();
        return redirect()->to("/dashboard/poll_template/edit_/$newPoll->id");
    }
    public function edit(PollTemplate $id)
    {
        $pollTemp = $id;
        $title=$pollTemp->name;
        return view('PollView::PollTemp.editPollTemp', compact( 'pollTemp','title'));
    }
    public function show(PollTemplate $id)
    {
        $pollTemp=$id;
        $breadcrumbs = ["/" => " خانه ", "/poll" => "نظرسنجی"];
        return view('PollView::PollCustomer.showCustomerInfoPoll' , compact('pollTemp','breadcrumbs'));
    }
    public function all_poll(PollTemplate $id)
    {
        $titlePage = 'نظرسنجی مربوط به '.$id->name;
        $polls=Poll::query()->where('poll_temp_id',$id->id)->get();
        return view('PollView::PollResult.allPollResult', compact('polls','titlePage'));
    }
}
