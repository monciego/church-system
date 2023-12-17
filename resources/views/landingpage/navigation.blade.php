<header class="relative" x-data="{ open: false }">
    <div class="pt-6">
        <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/">
                        <img class="h-[48px] sm:h-[64px]" src="{{ asset('logo.png') }}" alt="logo">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button type="button" @click="open = !open"
                            class="rounded-md p-2 inline-flex items-center justify-center text-gray-50  focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hidden space-x-8 md:flex md:ml-10">
                    <a href="{{ route('about.index') }}"
                        class="text-base font-medium text-white hover:text-gray-300">About</a>

                    <a href="{{ route('gallery-st-joseph-cathedral.index') }}"
                        class="text-base font-medium text-white hover:text-gray-300">Gallery</a>

                    <a href="{{ route('schedules.index') }}"
                        class="text-base font-medium text-white hover:text-gray-300">Schedules</a>

                </div>
            </div>
            <div class="hidden md:flex md:items-center md:space-x-6">

                @if (Route::has('login'))
                <div>
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Dashboard </a>
                    @else
                    <a href="{{ route('login') }}" class="text-base font-medium text-white hover:text-gray-300"> Log in
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="inline-flex ml-4 items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Register </a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </nav>
    </div>

    <div x-show="open" x-cloak class="absolute z-[100] top-0 inset-x-0 p-2 transition transform origin-top md:hidden"
        @click.away="open = false">
        <div class="rounded-lg shadow-md  bg-[#081c0b] ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <a href="/">
                        <img class="h-[42px]" src="{{ asset('logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="-mr-2">
                    <button type="button" @click="open = !open"
                        class=" rounded-md p-2 inline-flex items-center justify-center text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="pt-5 pb-6">
                <div class="px-2 space-y-1">
                    <a href="{{ route('about.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white">About</a>

                    <a href="{{ route('gallery.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white">Gallery</a>

                    <a href="{{ route('schedules.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white">Schedules</a>

                </div>
                <div class="mt-6 px-5">
                    <a href="{{ route('register') }}"
                        class="block text-center w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700">
                        Register
                    </a>
                </div>
                <div class="mt-6 px-5">
                    <p class="text-center text-sm font-medium text-gray-300">Have an existing account? <a
                            href="{{ route('login') }}" class="text-white hover:underline">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</header>