<?php

namespace Poll\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $new = new Question();
        $new->title = '';
        $new->statusPublish = 'draft';
        $new->save();

        return redirect()->to('dashboard/poll/edit/' . $new->id);
    }
    public function edit(Question $id)
    {
        $title = 'ویرایش ' . $id->title;
        $description = 'ویرایش نظرسنجی';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/poll" => " نظرسنجی ها  "];

        $ckeditor = true;
        $question = $id;

        return view('PollView::editPoll', compact('title', 'description',
            'breadcrumbs', 'question', 'ckeditor'));
    }
}
