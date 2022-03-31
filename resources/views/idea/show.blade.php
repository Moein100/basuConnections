<x-app-layout>
    <div>
        <a href="/" 
        class="hidden md:flex items-center font-semibold hover:underline">
            <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>  










    {{-- ideas --}}
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
                    <a href="#" class="hover:underline">{{$idea->title}}</a>
                </h4>
                <div class="text-gray-600 mt-3">
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
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                                Open
                            </div>
                            <button 
                            @click="isOpen = !isOpen"
                            @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in "
                            >
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul
                                x-show="isOpen" x-transition.origin.top.left.duration.200ms  
                                class="absolute z-20 w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3   lg:ml-8  -ml-36" style="display : none">
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Mark as smap</a></li>
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Post</a></li>
                                </ul>
                            </button>
                        </div>


                        <div class="flex items-center mt-4 md:mt-0 md:hidden ">
                            <div class="bg-gray-200 text-center rounded-xl h-10 py-2 pl-3 pr-8">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-500">Votes</div>
                            </div>
                            <button
                            class="w-20 bg-gray-300 font-bold text-xxs 
                            uppercase rounded-xl hover:bg-gray-500 transition duration-150 ease-in px-4 py-3
                            -mx-6">
                                Voted
                            </button>
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


        {{-- set status button --}}
     <div
     x-data="{isOpen:false}"
     class='relative'>
        <button 
        @click="isOpen = !isOpen"
        @click.away="isOpen = false"
        @keydown.escape.window="isOpen = false"
        type="button" 
        class="flex items-center justify-between md:px-10 px-6 py-2 text-sm bg-gray-200
        font-semibold rounded-xl border border-gray-200 hover:border-gray-400
        transition duration-150 ease-in mt-2 md:mt-0">
            <svg class="h-5 w-5 text-gray-600 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          
            <span> Set Status</span>
        </button> 
        
        <div 
        x-show="isOpen" x-transition.origin.top.left.duration.200ms style="display:none"
        class="absolute z-20 w-76 text-left font-semibold text-sm bg-white
        shadow-md rounded-xl mt-2">



        <form action="" method="post" class="space-y-4 px-4 py-6">
            <div class="space-y-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" checked="" class="text-gray-500 border-none bg-gray-200" name="radio-direct" value="1">
                        <span class="ml-2">open</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" checked="" class="text-purple-500 border-none bg-gray-200" name="radio-direct" value="2">
                        <span class="ml-2">Considering</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" checked="" class="text-yellow-500 border-none bg-gray-200" name="radio-direct" value="3">
                        <span class="ml-2">In Progress</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" checked="" class="text-green-500 border-none bg-gray-200" name="radio-direct" value="3">
                        <span class="ml-2">Implemented</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" checked="" class="text-red-500 border-none bg-gray-200" name="radio-direct" value="3">
                        <span class="ml-2">closed</span>
                    </label>
                </div>
            </div>

            <textarea name="update_comment" id="" cols="30" rows="3"
            class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-500 border-none px-4 py-2" 
            placeholder="Add a comment "></textarea>

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
                    <span>Update</span>
                </button>
            </div> 
            <div>
                <label class="font-normal inline-flex items-center">
                    <input type="checkbox" name="notify_voters" class="border-none bg-gray-200" checked="">
                    <span class="ml-2">Notifyl All Voters</span>    
                </label>    
            </div> 
        </form>



        </div>

     </div>
    </div>



    <div class="hidden md:flex items-center justify-center space-x-4">
        <button type="button" 
        class="flex items-center justify-between px-10 py-3 text-xs bg-gray-200
        font-bold rounded-xl border border-gray-200 hover:border-gray-400
        transition duration-150 ease-in">
            <span>VOTE</span>
        </button>  
        <div class="bg-white font-semibold text-center rounded-xl px-4 py-0.5">
            <div class="text-xl leading-snug ">12</div>
            <div class="text-gray-500 text-xs leading-none">Vote</div>
        </div>
    </div>
  </div>
  {{-- end of buttons --}}

  {{-- comment container  --}}

  <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
      {{-- commen comment  --}}
    
        <div class="comment-container  bg-white rounded-xl flex ">
      
            <div class="flex flex-1 px-2 py-6"> 
                <div class="flex-none mx-2 md:mx-0">
                    <a href="" ><img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                </div>
                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur fugit nam tempora. Id veniam blanditiis laborum ad. Cumque, sed harum facere nam maxime atque temporibus quis, numquam vel expedita voluptatem!
                    </div>
                    <div class="flex  md:items-center justify-between mt-6">
                        <div class="flex items-center md:text-xs text-xxs font-semibold space-x-2 text-gray-300">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                            
                        </div>


                        <div 
                        class="flex items-center space-x-2 "
                        x-data="{isOpen:false}">
                            <div class="hidden bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                                Open
                            </div>
                            <button 
                            @click="isOpen = !isOpen"
                            @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in "
                            >
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul
                                x-show="isOpen" x-transition.origin.top.left.duration.200ms  
                                class="absolute z-40 w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3   md:ml-8  -ml-36" style="display : none">
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Mark as smap</a></li>
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
       
            </div>
        </div>
      





      {{-- admin comment   --}}

      
        <div class="is-admin comment-container relative bg-white rounded-xl flex ">
      
            <div class=" flex flex-1 px-3 py-6"> 
                <div class="flex-none">
                    <a href="" ><img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                    <div class="text-center text-blue-600 text-xxs font-bold mt-2">
                        Admin
                    </div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur fugit nam tempora. Id veniam blanditiis laborum ad. Cumque, sed harum facere nam maxime atque temporibus quis, numquam vel expedita voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-300">
                            <div class="font-bold text-blue-600">John Doe</div>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                            
                        </div>
                        <div 
                        class="flex items-center space-x-2"
                        x-data="{isOpen:false}">
                            <div class="hidden bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                                Open
                            </div>
                            <button 
                            @click="isOpen = !isOpen"
                            @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in "
                            >
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul
                                x-show="isOpen" x-transition.origin.top.left.duration.200ms  
                                class="absolute z-40 w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3  md:ml-8  -ml-36" style="display : none">
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Mark as smap</a></li>
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
       
            </div>
        </div>
      






      {{-- another commen comment  --}}
      
        <div class="comment-container  relative bg-white rounded-xl flex ">
      
            <div class=" flex flex-1 px-3 py-6"> 
                <div class="flex-none">
                    <a href="" ><img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                </div>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur fugit nam tempora. Id veniam blanditiis laborum ad. Cumque, sed harum facere nam maxime atque temporibus quis, numquam vel expedita voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-300">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 Hours ago</div>
                            
                        </div>
                        <div 
                        class="flex items-center space-x-2"
                        x-data="{isOpen:false}">
                            <div class="hidden bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                                Open
                            </div>
                            <button 
                            @click="isOpen = !isOpen"
                            @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in "
                            >
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul
                                x-show="isOpen" x-transition.origin.top.left.duration.200ms  
                                class="absolute z-40 w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3  md:ml-8  -ml-36" style="display : none">
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Mark as smap</a></li>
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
       
            </div>
        </div>
      




  </div>
  {{-- end of commnets  --}}
</x-app-layout>