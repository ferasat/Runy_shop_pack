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
        $new=new Poll();
        $new->subject="";
        $new->save();


        $newQuestion = new PollQuestion();
        $newQuestion->title = '';
        $newQuestion->poll_id = $new->id;

        $newQuestion->save();

        return redirect()->to('dashboard/poll/edit/' . $new->id);
    }
    public function edit(Poll $id)
    {
        $title = 'ویرایش ' . $id->subject;
        $description = 'ویرایش نظرسنجی';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/poll" => " نظرسنجی ها  "];

        $ckeditor = true;
        $poll = $id;
        $question=PollQuestion::query()->where('poll_id',$poll->id)->first();

        return view('PollView::editPoll', compact('title', 'description',
            'breadcrumbs', 'poll', 'question','ckeditor'));
    }
}
