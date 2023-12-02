<?php

namespace Poll\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Poll\Models\Poll;
use Poll\Models\PollQuestion;
use Poll\Models\Question;


class PollController extends Controller
{
    public function index()
    {
        $title = 'نظرسنجی';
        $description = 'مدیریت نظرسنجی';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/poll" => " نظرسنجی ها  "];

        return view('PollView::indexPoll', compact('title', 'description', 'breadcrumbs'));
    }

    public function create()
    {
        $new = new Poll();
        $new->subject = "بدون عنوان";
        $new->status = 0;
        $new->save();


//        $newQuestion = new PollQuestion();
//        $newQuestion->title = 'سوال ؟';
//        $newQuestion->poll_id = $new->id;
//
//        $newQuestion->save();

        return redirect()->to('dashboard/poll/edit/' . $new->id);
    }

    public function edit(Poll $id)
    {
        $title = 'ویرایش ' . $id->subject;
        $description = 'ویرایش نظرسنجی';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/poll" => " نظرسنجی ها  "];

        $poll = $id;


        return view('PollView::editPoll', compact('title', 'description',
            'breadcrumbs', 'poll'));
    }

    public function show(Poll $id)
    {
        if ($id->id == 12){
            return redirect('https://mortazavistore.ir/poll/show/15');
        }
        $poll = $id;
        $breadcrumbs = ["/" => " خانه ", "/poll" => "نظرسنجی"];
        if ($poll->status == 0) {
            return view('PollView::showPoll', compact('poll', 'breadcrumbs'));
        } elseif ($poll->status == 1 and $poll->poll_type == 'public') {
            return view('PollView::showPoll', compact('poll', 'breadcrumbs'));
        } else {
            return redirect('/');
        }
    }
}
