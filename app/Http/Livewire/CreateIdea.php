<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Vote;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateIdea extends Component
{
    public $title;

    public $category =1;

    public $description;


    protected function rules()
    {

    return   [
            'title' => ['required','min:4'],
            'category' => ['required','integer',Rule::exists('categories','id')],
            'description' => ['required','min:4'],
        ];
    
    }
    
    public function createIdea()
    {
        if (auth()->guest()) 
        {
            return redirect()->route('idea.index');
        }

       
            $this->validate();

            $idea=  Idea::create(
                [
                    'user_id' => auth()->id(),
                    'category_id' => $this->category,
                    'status_id' => 1,
                    'title' => $this->title,    
                    'description' => $this->description,    
                ]);
        


            // Vote::create(
            // [
            //     'idea_id' => $idea->id,
            //     'user_id' =>auth()->id(),
            // ]);


            $idea->vote(auth()->user());

            session()->flash('success_message','idea was added successfully');

            $this->emit('resetPage');
            $this->reset();

        
    }


    public function render()
    {
        return view('livewire.create-idea',
        [
            'categories' => Category::all(),
        ]);
    }
}
