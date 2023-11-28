<?php

namespace App\Livewire\User\Poll;

use Livewire\Component;
use Poll\Models\PollQuestion;
use Poll\Models\PollQuestionAnswer;

class ShowPoll extends Component
{
    public $poll, $questions, $selectedAnswers, $show_success = false;

    public function mount()
    {
        $this->questions = PollQuestion::query()->where('poll_id', $this->poll->id)->get();
        $this->selectedAnswers = [];
    }

    public function render()
    {
        return view('livewire.user.poll.show-poll');
    }

    public function saveAnswer($questionId, $answerIndex)
    {
        $this->selectedAnswers[$questionId] = $answerIndex;
    }

    public function saveAnswers()
    {
        /*$this->validate([
            'selectedAnswers.box_text' => 'required|array',
            'selectedAnswers.box_text.*' => 'required',

            'selectedAnswers.single_choice' => 'required|array',
            'selectedAnswers.single_choice.*' => 'required',

            'selectedAnswers.multiple_choice' => 'required|array',
            'selectedAnswers.multiple_choice.*' => 'required',
        ]);*/
        //dd($this->selectedAnswers);

        foreach ($this->selectedAnswers as $key => $selected_answer) {

            if ($key == "single_choice") {
                foreach ($selected_answer as $key_question_id => $single_ans) {
                    $upQuestion=PollQuestion::query()->find($key_question_id);
                    $upQuestion->total_vote_count++;
                    $upQuestion->save();
                    $upAnswer = PollQuestionAnswer::query()->find($single_ans);
                    if ($this->poll->poll_type == 'public') {
                        $upAnswer->vote_count = $upAnswer->vote_count + 1;
                    }
                    $upAnswer->vote_answer = 1;
                    $upAnswer->save();
                    //  dd($key_question_id,$single_ans,$upQuestion,$upAnswer);
                }

            } elseif ($key == "multiple_choice") {
                foreach ($selected_answer as $key_question_id => $multi_ans) {
                    foreach ($multi_ans as $key_answer_id => $ans) {
                        $upQuestion=PollQuestion::query()->find($key_question_id);
                        $upQuestion->total_vote_count++;
                        $upQuestion->save();
                        $upAnswer = PollQuestionAnswer::query()->find($key_answer_id);
                        if ($this->poll->poll_type == 'public') {
                            $upAnswer->vote_count = $upAnswer->vote_count + 1;
                        }
                        $upAnswer->vote_answer = 1;
                        $upAnswer->save();

                    }

                }

            } elseif ($key == "box_text") {

                foreach ($selected_answer as $key_answer_id => $text_ans) {

                    $upAnswer = PollQuestionAnswer::query()->find($key_answer_id);
                    $upAnswer->vote_answer = 1;
                    $upAnswer->vote_answer_text = $text_ans;
                    $upAnswer->save();

                }
            } else {
                dd('error');
            }
        }
        $this->poll->status = 1;
        $this->poll->save();
        $this->show_success = true;
    }
}
