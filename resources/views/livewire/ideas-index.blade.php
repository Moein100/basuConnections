<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
     {{-- filters --}}
  <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6 mt-3 md:mt-0">
    <div class="w-full md:w-1/3">
        <select wire:model="category" name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
            <option value="All Categories">All Categories</option>

            @foreach($categories as $category)

                <option value="{{$category->name}}">{{$category->name}}</option>

            @endforeach
        </select>
    </div>
    <div class="w-full md:w-1/3">
        <select wire:model="filter" name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
            <option value="No Filter">No Filter</option>
            <option value="Top Voted">Top Voted</option>
            <option value="My Ideas">My Ideas</option>
            @admin
            <option value="Spam">Spams</option>
            <option value="Spam Comments">Spams Comments</option>
            @endadmin
        </select>
    </div>
    <div class="w-full md:w-1/3 relative">

        <input wire:model="search" type="search" placeholder="Find an Idea" class="w-full placeholder-gray-900 border-none rounded-search  bg-white px-4 py-2 pl-8">
        <div class="absolute top-0 flex items-center text-gray-700 h-full ml-2">
            <svg class="h-6 w-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>
  </div> {{--end filters --}}

  {{-- ideas --}}
  <div class="ideas-container space-y-6 my-6">


@forelse ($ideas as $idea)
    {{-- ideas1 --}}
        <livewire:idea-index
        :key="$idea->id"
        :idea="$idea" :votesCount="$idea->votes_count"/>
      {{-- end Ideas1 --}}
@empty
    <div class="mx-auto w-70 mt-12 ">
        <div class="text-gray-400 text-center font-bold mt-6">
            No ideas where found
        </div>
    </div>
@endforelse


      <div class="my-10">
          {{$ideas->links()}}
      </div>
</div>


</div>
