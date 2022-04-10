
<div>
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container  bg-white rounded-xl flex ">
            {{-- 1 --}}

            {{-- 2 --}}
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="" ><img src="{{$idea->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        {{$idea->title}}
                    </h4>
                    <div class="text-gray-600 mt-3">
                        @admin
                        @if($idea->spam_reports > 0)
                            <div class="text-white w-1/2 text-center px-4 py-0.5 bg-red-500 rounded-full mb-2">Spam reports : {{$idea->spam_reports}}</div>
                        @endif
                        @endadmin
                        {{$idea->description}}
                    </div>
                    <div class="flex flex-col lg:flex-row  justify-between mt-6">
                        <div class="flex items-center md:text-xs text-xxs font-semibold space-x-2 text-gray-300">
                            <div class="font-bold text-gray-900">{{$idea->user->name}}</div>
                            <div>&bull;</div>
                            <div>{{$idea->created_at->diffForHumans()}}</div>
                            <div>&bull;</div>
                            <div>{{$idea->category->name}}</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 comments</div>
                        </div>
                        <div
                            class="flex items-center space-x-2 mt-4 lg:mt-0 md:justify-between"
                            x-data="{isOpen:false}">
                                <div class="{{$idea->status->classes}} text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                                    {{$idea->status->name}}
                                </div>
                            @auth
                                <div class="relative">

                                    <button
                                    @click="isOpen = !isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in "
                                    >
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <ul
                                    x-show="isOpen" x-transition.origin.top.left.duration.200ms
                                    class="absolute z-20 w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3   lg:ml-8  -ml-36" style="display : none">

                                        @can('update',$idea)
                                            <li><a href=""
                                            @click.prevent="$dispatch('custom-show-edit-modal')"
                                            class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> edit</a></li>
                                        @endcan
                                        @can('delete',$idea)
                                        <li><a href=""
                                               @click.prevent="$dispatch('custom-show-delete-modal')"
                                               class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Idea</a></li>
                                        @endcan
                                        <li><a
                                                @click.prevent="$dispatch('custom-show-spam-modal')"
                                                href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> mark as spam</a></li>
                                        @admin
                                            @if($idea->spam_reports > 0)
                                        <li><a
                                                @click.prevent="$dispatch('custom-show-not-spam-modal')"
                                                href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Not spam</a></li>
                                        @endif
                                        @endadmin
                                    </ul>
                                </div>
                            @endauth
                            </div>


                            <div class="flex items-center mt-4 md:mt-0 md:hidden ">
                                <div class="bg-gray-200 text-center rounded-xl h-10 py-2 pl-3 pr-8">
                                    <div class="text-sm font-bold leading-none @if($hasVoted) text-blue-600 @endif">{{$votesCount}}</div>
                                    <div class="text-xxs font-semibold leading-none text-gray-500">Votes</div>
                                </div>
                                @if ($hasVoted)
                                <button wire:click.prevent="vote"
                                class="w-20 bg-blue-600 font-bold text-xxs text-white
                                uppercase rounded-xl hover:bg-blue-500 transition duration-150 ease-in px-4 py-3
                                -mx-6">
                                    Voted
                                </button>
                                @else
                                <button wire:click.prevent="vote"
                                class="w-20 bg-gray-300 font-bold text-xxs
                                uppercase rounded-xl hover:bg-gray-500 transition duration-150 ease-in px-4 py-3
                                -mx-6">
                                    Vote
                                </button>
                                @endif
                            </div>




                    </div>
                </div>

            </div>
        </div>
      </div>
      {{-- end Ideas --}}

      {{-- buttons  --}}
      <div class="buttons-container md:flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center justify-center md:space-x-4">

            {{-- reply button  --}}
            <div
            x-data="{isOpen:false}"
            class='relative'>
                <button
                @click="isOpen = !isOpen"
                @click.away="isOpen = false"
                @keydown.escape.window="isOpen = false"
                type="button"
                class="flex items-center justify-center text-sm bg-blue-600 text-white font-semibold
                rounded-xl   hover:bg-blue-800 transition duration-150 ease-in
                px-12 py-2">
                Reply
                </button>
                <div
                x-show="isOpen" x-transition.origin.top.left.duration.200ms style="display:none"
                class="absolute z-10 w-104 text-left font-semibold text-sm bg-white
                 shadow-md rounded-xl mt-2">
                    <form action="" method="post" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="" cols="30" rows="4"
                            class="w-full text-sm bg-gray-200 rounded-xl placeholder-gray-900
                            border-none px-4 py-2"
                            placeholder="Go ahead"></textarea>
                        </div>
                        <div class="flex flex-col md:flex-row items-center md:space-x-3">
                            <button
                            type="button"
                            class="flex items-center justify-center w-full md:w-1/2 text-sm bg-blue-600 text-white font-semibold
                            rounded-xl border border-blue-600 hover:border-blue-800 transition duration-150 ease-in
                            px-10 py-3">
                            Post Comment
                            </button>
                            <button type="button"
                            class="flex items-center justify-center w-full md:w-1/2 h-11 text-xs bg-gray-200
                            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                            transition duration-150 ease-in mt-2 md:mt-0">
                                 <svg class="h-5 w-5 text-gray-600 mr-1 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                 </svg>
                                <span> Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>


{{--        --}}{{-- set status button --}}
{{--        @auth--}}
{{--            @if(auth()->user()->isAdmin())--}}
{{--                <livewire:set-status :idea="$idea"/>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--            --}}{{-- end set status --}}

{{--            custom blade 'admin'--}}

            @admin
            <livewire:set-status :idea="$idea"/>
            @endadmin

        </div>



        <div class="hidden md:flex items-center justify-center space-x-4">



            @if ($hasVoted)
            <button wire:click.prevent="vote" type="button"
            class="flex items-center justify-between px-10 py-3 text-xs bg-blue-600 text-white
            font-bold rounded-xl border border-blue-600 hover:border-blue-800
            transition duration-150 ease-in">
                <span>VOTED</span>
            </button>
            @else
            <button wire:click.prevent="vote" type="button"
            class="flex items-center justify-between px-10 py-3 text-xs bg-gray-200
            font-bold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in">
                <span>VOTE</span>
            </button>
            @endif




            {{-- @if ($hasVoted)
            <button type="button"
            class="flex items-center justify-between px-10 py-3 text-xs bg-gray-200
            font-bold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in">
                <span>VOTE</span>
            </button>
            @else
            <button type="button"
            class="flex items-center justify-between px-10 py-3 text-xs bg-blue-600
            font-bold rounded-xl border border-blue-600 hover:border-blue-800
            transition duration-150 ease-in">
                <span>VOTED</span>
            </button>
            @endif --}}
            <div class="bg-white font-semibold text-center rounded-xl px-4 py-0.5">
                <div class="text-xl leading-snug @if($hasVoted) text-blue-600 @endif">{{$votesCount}}</div>
                <div class="text-gray-500 text-xs leading-none">Vote</div>
            </div>
        </div>
      </div>
      {{-- end of buttons --}}
</div>
