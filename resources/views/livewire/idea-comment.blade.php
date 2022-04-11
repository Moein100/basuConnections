<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
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
</div>
