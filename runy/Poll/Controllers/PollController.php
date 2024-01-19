<?php

namespace Poll\Controllers;
use App\Http\Controllers\Controller;
use Poll\Models\Poll;

class PollController extends Controller
{

    public function show()
    {
        $poll_id=$_REQUEST['poll'];
        $poll=Poll::query()->find($poll_id);
        if ($poll->status==0)
        {
            return view('PollView::PollCustomer.showPoll' , compact('poll' ));
        }else{
           return redirect('/');
        }
    }
    public function show_poll(Poll $id)
    {
        $poll=$id;
        $title="دیدن نظرسنجی";
        return view('PollView::PollResult.PollResult', compact('poll','title'));

    }
}
