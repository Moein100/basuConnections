<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Response;
use Livewire\Component;

class AddComment extends Component
{
    public $idea;
    public $comment;


    public function mount(Idea $idea)
    {

        $this->idea=$idea;
    }


    protected function rules()
    {
        return [
            'comment' => ['required','min:4'],
        ];
    }

    public function addComment()
    {



        if (auth()->guest())
        {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();

        Comment::create(
            [
               'user_id' => auth()->id(),
                'idea_id' => $this->idea->id,
                'status_id' =>1,
                'body' => $this->comment
            ]);

        if (strpos(url()->previous(),"?comment=") && !strpos(url()->previous(),"?comment=1"))
        {
            redirect(explode('?',url()->previous())[0]);

            $this->reset('comment');

            $this->emit('commentWasAdded');
            $this->emit('refreshPage');
            $this->idea->refresh();


        }
        else
        {
            $this->reset('comment');

            $this->emit('commentWasAdded');
            $this->emit('refreshPage');
            $this->idea->refresh();
        }



    }


    public function render()
    {
        return view('livewire.add-comment');
    }
}
