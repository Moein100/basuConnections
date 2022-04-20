<div>
    @auth
    <form wire:submit.prevent="createIdea" action="" method="POST" class="space-y-4 py-6">
        <div>
            <input wire:model.defer="title" type="text" class="w-full border-none text-sm bg-gray-200 rounded-xl placeholder-gray-500
            px-4 py-2 " placeholder="your Idea">
            @error('title')
                <p class="text-red-600 tex-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>
        <div >
            <select wire:model.defer="category" name="category_add" id="category_add" class="w-full
            bg-gray-200 text-sm text-gray-500 border-none rounded-xl px-4 py-2">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-red-600 tex-xs mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        <div>
            <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4" placeholder="add you idea"
            class="w-full bg-gray-200 rounded-xl placeholder-gray-500 text-sm px-4 py-2 border-none"></textarea>
            @error('description')
            <p class="text-red-600 tex-xs mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="flex items-center justify-between space-x-3">
            <button type="button"
            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in">
                 <svg class="h-5 w-5 text-gray-600 mr-1 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                 </svg>
                <span> Attach</span>
            </button>


            <button type="submit"
            class="flex submit-blue  items-center justify-center w-1/2 h-11 text-xs text-white
            font-semibold rounded-xl border-2 border-blue-600 hover:border-blue-800
            transition duration-150 ease-in">
                <span>Submit</span>
            </button>
        </div>
    </form>
    @else
    <div class="my-6 text-center">
        <a 
        wire:click.prevent="redirectToLogin"

        href="{{route('login')}}"
            class="flex flex-col justify-center mx-auto w-1/2 h-11 text-xs bg-blue-500 text-white
            font-semibold rounded-xl border-2 border-blue-500 hover:border-blue-800
            transition duration-150 ease-in">
                <span>Login</span>
        </a>


        <a 
        wire:click.prevent="redirectToRegister"
        href="{{route('register')}}"
            class="flex flex-col justify-center mx-auto mt-3 w-1/2 h-11 text-xs bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in">

                <span> Sing up</span>
        </a>
    </div>

    @endauth
    <div>
{{--        @if(session('success_message'))--}}
{{--            <div--}}
{{--            x-data="{ isVisible : true}"--}}
{{--            x-init = "setTimeout(() => {isVisible =false},5000)"--}}
{{--            x-show="isVisible"--}}
{{--            x-transition.origin.200ms--}}
{{--            @click="isVisible = !isVisible"--}}
{{--            @click.away="isVisible = false"--}}
{{--            class="flex justify-center cursor-pointer text-white my-4 bg-green-700 rounded-xl px-2 py-1">--}}
{{--                <span>{{ session('success_message') }}</span>--}}
{{--            </div>--}}
{{--        @endif    --}}
        <x-notification-success/>
    </div>
</div>
