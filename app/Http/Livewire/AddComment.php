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
                'body' => $this->comment
            ]);

        $this->reset();

        $this->emit('commentWasAdded');
    }


    public function render()
    {
        return view('livewire.add-comment');
    }
}
