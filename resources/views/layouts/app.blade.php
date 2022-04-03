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
         <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <body class="font-sans bg-gray-100 text-gray-900 text-sm">

            <!-- Page Heading -->
            <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
                <a href="/" ><img src="{{asset('img/logo.svg')}}" alt=""></a>
                <div class="flex items-center mt-2 md:mt-0">
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

       
        <script src="{{ asset('js/scripts.js') }}" ></script>
        @livewireScripts
    </body>
</html>
