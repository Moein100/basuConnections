<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
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
        if (auth()->check()) 
        {
            $this->validate();

            Idea::create(
                [
                    'user_id' => auth()->id(),
                    'category_id' => $this->category,
                    'status_id' => 1,
                    'title' => $this->title,    
                    'description' => $this->description,    
                ]);
        }

        session()->flash('success_message','idea was added successfully');

        $this->reset();

        return redirect()->route('idea.index');
    }


    public function render()
    {
        return view('livewire.create-idea',
        [
            'categories' => Category::all(),
        ]);
    }
}