<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Basu Connections</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
         <!-- Scripts -->

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <body class="font-sans bg-gray-100 text-gray-900 text-sm">

            <!-- Page Heading -->
            <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
                <a href="/" ><img src="{{asset('img/logo.svg')}}" alt=""></a>
                <div class="flex items-center mt-2 md:mt-0">
                    @if (Route::has('login'))
                    <div class="  px-6 py-4 ">
                        @auth
                            <div class="flex items-center space-x-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>

                         <div
                             x-data="{isOpen:false}"
                             class="relative"

                         >
                             <button @click="isOpen=!isOpen">
                                 <svg  class="h-8 w-8 text-gray-400 hover:text-gray-700 transition duration-150 ease-in " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                 </svg>
                                 <div class="absolute rounded-full bg-red-500 text-xxs w-6 h-6 flex justify-center items-center -right-1 -top-1 text-white">8</div>
                             </button>

                                 <ul
                                     @click="isOpen = !isOpen"
                                     @click.away="isOpen = false"
                                     @keydown.escape.window="isOpen = false"
                                     x-show="isOpen" x-transition.origin.top.left.duration.200ms
                                     class="absolute z-20 w-76 md:w-96 max-h-96 overflow-y-auto  text-sm bg-white shadow-lg rounded-xl py-3 -right-28 md:-right-12 " style="display : none;">


                                         <li>
                                             <a href=""

                                                class=" flex hover:bg-gray-200 px-5 py-3 transition duration-150 ease-in">
                                                 <img class="rounded-xl w-10 h-10" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=50" />
                                                 <div class="ml-4">
                                                     <div>
                                                         <span class="font-semibold ">Moein</span>
                                                         Commented on
                                                         <span class="font-semibold">this is my idea :</span>
                                                         <span class="">laskjdflkasfdjlaksfdjlasf</span>
                                                     </div>
                                                     <div class="text-gray-400">1 hour ago</div>
                                                 </div>
                                             </a>
                                         </li>



                                     <li>
                                         <a href=""

                                            class=" flex hover:bg-gray-200 px-5 py-3 transition duration-150 ease-in">
                                             <img class="rounded-xl w-10 h-10" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=50" />
                                             <div class="ml-4">
                                                 <div>
                                                     <span class="font-semibold ">Moein</span>
                                                     Commented on
                                                     <span class="font-semibold">this is my idea :</span>
                                                     <span class="">laskjdflkasfdjlaksfdjlasf</span>
                                                 </div>
                                                 <div class="text-gray-400">1 hour ago</div>
                                             </div>
                                         </a>
                                     </li>



                                     <li>
                                         <a href=""

                                            class=" flex hover:bg-gray-200 px-5 py-3 transition duration-150 ease-in">
                                             <img class="rounded-xl w-10 h-10" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=50" />
                                             <div class="ml-4">
                                                 <div>
                                                     <span class="font-semibold ">Moein</span>
                                                     Commented on
                                                     <span class="font-semibold">this is my idea :</span>
                                                     <span class="">laskjdflkasfdjlaksfdjlasf</span>
                                                 </div>
                                                 <div class="text-gray-400">1 hour ago</div>
                                             </div>
                                         </a>
                                     </li>

                                     <li>
                                         <a href=""

                                            class=" flex hover:bg-gray-200 px-5 py-3 transition duration-150 ease-in">
                                             <img class="rounded-xl w-10 h-10" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=50" />
                                             <div class="ml-4">
                                                 <div class="line-clamp-5">
                                                     <span class="font-semibold ">Moein</span>
                                                     Commented on
                                                     <span class="font-semibold">this is my idea :</span>
                                                     <span class="">laskjdflkasfdjlaksfdjlasf</span>
                                                 </div>
                                                 <div class="text-gray-400">1 hour ago</div>
                                             </div>
                                         </a>
                                     </li>


                                     <li>
                                         <a href=""

                                            class=" flex hover:bg-gray-200 px-5 py-3 transition duration-150 ease-in">
                                             <img class="rounded-xl w-10 h-10" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=50" />
                                             <div class="ml-4">
                                                 <div>
                                                     <span class="font-semibold ">Moein</span>
                                                     Commented on
                                                     <span class="font-semibold">this is my idea :</span>
                                                     <span class="">laskjdflkasfdjlaksfdjlasf</span>
                                                 </div>
                                                 <div class="text-gray-400">1 hour ago</div>
                                             </div>
                                         </a>
                                     </li>
                                     <li class="border-t border-gray-400 text-center font-bold hover:bg-gray-200 py-2 transition duration-150 ease-in">
                                         <button class="font-bold">
                                             Mark all as read
                                         </button>
                                     </li>
                                 </ul>




                         </div>

                         </div>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    <a href=""><img
                        class="w-10 h-10 rounded-full"
                         src="https://www.gravatar.com/avatar/0000000000000000000000000000000000000?d=mp"
                          alt="avatar"></a>
                </div>
            </header>


            <div class="container flex justify-center">
                <a href="{{url()->previous()}}"
                class="md:hidden flex items-center font-semibold hover:underline">
                    <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="ml-2">Back</span>
                </a>
            </div>


            <!-- Page Content -->
            <main class="container mx-auto max-width-all flex flex-col md:flex-row">

                {{-- left sidebar --}}
                <div class="max-width-left  w-full mx-auto md:m-0 md:mr-5">
                    <div class="border-2 md:sticky md:top-8 border-blue-300 rounded-xl mt-16 bg-white">
                        <div class="text-center px-3 py-2 pt-6">
                            <h3 class="font-semibold text-base">
                                Add an Idea
                            </h3>
                            <p class="text-xs mt-4">
                            @auth
                                let us know what you would like
                            @else
                                please Login to create an idea.
                            @endauth
                            </p>
                            @auth
                           <livewire:create-idea />
                            @else
                            <div class="my-6 text-center">
                                <a href="{{route('login')}}"
                                    class="flex flex-col justify-center mx-auto w-1/2 h-11 text-xs bg-blue-500 text-white
                                    font-semibold rounded-xl border-2 border-blue-500 hover:border-blue-800
                                    transition duration-150 ease-in">
                                        <span>Login</span>
                                </a>


                                <a href="{{route('register')}}"
                                    class="flex flex-col justify-center mx-auto mt-3 w-1/2 h-11 text-xs bg-gray-200
                                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                    transition duration-150 ease-in">

                                        <span> Sing up</span>
                                </a>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>

                {{-- right side --}}
                <div class="max-width-right w-full px-2 md:px-0">
                    <livewire:status-filters/>
                    {{$slot}}
                </div>
            </main>
        </div>



        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
