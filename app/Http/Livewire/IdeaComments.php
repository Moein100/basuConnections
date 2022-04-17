<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Livewire\WithPagination;

class IdeaComments extends Component
{
    use WithPagination;
    public $idea;

    protected $listeners=[
        'commentWasAdded',
        'commentWasDeleted',
        'commentWasMarkedAsSpam',
        'statusWasUpdated',
        'refreshPage'=>'$refresh'];

    public function mount(Idea $idea)
    {
        $this->idea=$idea;
    }


    public function commentWasAdded()
    {
        $this->idea->refresh();
    }

    public function commentWasDeleted()
    {

        $this->idea->refresh();
        $this->gotoPage(1);
    }

    public function commentWasMarkedAsSpam()
    {

        $this->idea->refresh();

    }

    public function statusWasUpdated()
    {

        $this->idea->refresh();

    }



    public function render()
    {
        return view('livewire.idea-comments',
        [
            'comments' => $this->idea->comments()->paginate(10,['*'],"comment")->withQueryString()
        ]
        );
    }
}
