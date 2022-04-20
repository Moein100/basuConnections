<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Vote;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateIdea extends Component
{
    use WithAuthRedirects;
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


            if (app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "idea.index")
            {



                $this->emit('resetPage');

                $this->reset();
                $this->emit('ideaWasCreated');
            }else
            {
                 redirect('/')->with('success_message','idea was added successfully');
            }





    }


    public function render()
    {
        return view('livewire.create-idea',
        [
            'categories' => Category::all(),
        ]);
    }
}
