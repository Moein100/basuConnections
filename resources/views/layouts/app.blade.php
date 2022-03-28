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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-100 text-gray-900 text-sm" >

            <!-- Page Heading -->
            <header class="flex items-center justify-between px-8 py-4">
                <a href="" ><img src="{{asset('img/logo.svg')}}" alt=""></a>
                <div class="flex items-center">
                    @if (Route::has('login'))
                    <div class="  px-6 py-4 ">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
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

            <!-- Page Content -->
            <main class="container mx-auto max-width-all flex">

                {{-- left sidebar --}}
                <div class="max-width-left mr-5 w-full">
                    <div class="border-2 border-blue-300 rounded-xl mt-16 bg-white">
                        <div class="text-center px-3 py-2 pt-6">
                            <h3 class="font-semibold text-base">
                                Add an Idea
                            </h3>
                            <p class="text-xs mt-4">let us know what you would like</p>
                            <form action="" method="POST" class="space-y-4 py-6">
                                <div>
                                    <input type="text" class="w-full border-none text-sm bg-gray-200 rounded-xl placeholder-gray-500
                                    px-4 py-2 " placeholder="your Idea">
                                </div>
                                <div >
                                    <select name="category_add" id="category_add" class="w-full
                                    bg-gray-200 text-sm text-gray-500 border-none rounded-xl px-4 py-2">
                                        <option value="1">Category One</option>
                                        <option value="1">Category One</option>
                                        <option value="1">Category One</option>
                                        <option value="1">Category One</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea name="idea" id="idea" cols="30" rows="4" placeholder="add you idea"
                                    class="w-full bg-gray-200 rounded-xl placeholder-gray-500 text-sm px-4 py-2 border-none"></textarea>
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
                        </div>
                    </div>
                </div>

                {{-- right side --}}
                <div class="max-width-right w-full ">
                    <nav class="flex items-center justify-between text-xs mb-4">
                        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                            <li><a href="" class="border-b-4 pb-3 border-blue-400">All Ideas (87)</a></li>    
                            <li><a href="" class="text-gray-400 transition duration-150
                                ease-in border-b-4 pb-3 hover:border-blue-400">Considering (6)</a></li>
                                <li><a href="" class="text-gray-400 transition duration-150
                                    ease-in border-b-4 pb-3 hover:border-blue-400">In progress (1)</a></li>    
                        </ul>   
                        
                        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                            <li><a href="" class="border-b-4 pb-3 border-blue-400">implemented (10)</a></li>    
                            <li><a href="" class="text-gray-400 transition duration-150
                                ease-in border-b-4 pb-3 hover:border-blue-400">closed (6)</a></li>
                        </ul> 
                    </nav>                    
                    {{$slot}}
                </div>
            </main>
        </div>
    </body>
</html>
