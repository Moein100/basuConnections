<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{

    public $idea;
    public $votesCount;
    public $hasVoted;

    public function mount(Idea $idea,$votesCount)
    {
        $this->idea=$idea;
        $this->votesCount=$votesCount;
        $this->hasVoted = $idea->isVotedByUser(auth()->user());
        // $this->hasVoted = $idea->voted_by_user; this line is just for the index page because we have subquery (addSelect) just on that page
    }

    public function vote()
    {
        if(!auth()->check())
        {
            return redirect(route('login'));

        }

        if ($this->hasVoted) 
        {
            $this->idea->removeVote(auth()->user());
            $this->votesCount--;
            $this->hasVoted = false;
        }else
        {
            $this->idea->vote(auth()->user());
            $this->votesCount++;
            $this->hasVoted = true;
        }
    }


    public function render()
    {
        return view('livewire.idea-show');
        
    }
}
