<x-landing-page-layout>


    <div class="relative overflow-hidden">

        <main>
            <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                <div class="mx-auto max-w-7xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div
                            class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                            <div class="lg:py-4">
                                <a href="{{ route('schedules.index') }}"
                                    class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                    <span
                                        class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-teal-500 to-indigo-600 rounded-full">View
                                        Schedule</span>
                                    <span class="ml-4 text-sm">Check our available timings</span>
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <h1
                                    class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                    <span class="block">St. Joseph</span>
                                    <span
                                        class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-indigo-400 sm:pb-5">Cathedral
                                        Parish</span>
                                </h1>
                                <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Experience the
                                    divine at St. Joseph Cathedral Parish. Schedule your events and request certificates
                                    with ease.</p>

                                <div class="flex items-center gap-4 justify-center lg:justify-start">
                                    <a href="{{ route('schedule-event.index') }}"
                                        class="mt-6 px-5 sm:px-8 py-3 text-sm sm:text-base  flex items-center justify-center rounded-md bg-gradient-to-r from-teal-500 to-indigo-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">
                                        Schedule Now
                                    </a>
                                    <a href="{{ route('request-certificate.index') }}"
                                        class="mt-6 flex items-center justify-center rounded-md border border-gray-300  bg-transparent px-5 sm:px-8 py-3 text-sm sm:text-base font-medium text-white hover:bg-gray-700  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                                        Request Certificate
                                    </a>
                                </div>
                                <p class="mt-3 text-sm text-center sm:text-left text-gray-300 sm:mt-4">
                                    Your data is our priority, and we ensure a secure and enjoyable booking experience.
                                    For any inquiries, reach out to our official accounts. Let's make your event
                                    planning seamless and worry-free.

                                </p>
                            </div>
                        </div>
                        <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                <div class="flex items-center mt-10 gap-10">
                                    <div
                                        class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[16rem] sm:h-[20rem] w-[9rem] sm:w-[10.5rem] rounded-full">
                                        <img class="h-full object-cover w-full"
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Guido_Reni_-_Saint_Joseph_and_the_Christ_Child_-_Google_Art_Project.jpg/240px-Guido_Reni_-_Saint_Joseph_and_the_Christ_Child_-_Google_Art_Project.jpg"
                                            alt="">
                                    </div>
                                    <div
                                        class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[16rem] sm:h-[25rem] w-[9rem] sm:w-[15.5rem] rounded-full">
                                        <img class="h-full object-cover w-full"
                                            src="{{ asset('background-image.jpg') }}" alt="">
                                    </div>
                                    <div
                                        class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[16rem] sm:h-[20rem] w-[9rem] sm:w-[10.5rem] rounded-full">
                                        <img class="h-full object-cover w-full"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjb3zMMOa7OtaC2JyYLHnOhzLWhZrlCpFJqP0OxPlqSgdgwJi7GhQeQ_N5rGCQHGBXf-U&usqp=CAU"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative bg-gray-900">
                <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                    <img class="w-full h-full object-cover"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Alaminos_Church_in_Pangasinan.jpg/1920px-Alaminos_Church_in_Pangasinan.jpg"
                        alt="">
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-100 mix-blend-multiply">
                    </div>
                </div>
                <div
                    class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
                    <div class="md:ml-auto md:w-1/2 md:pl-10">
                        <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">About </h2>
                        <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">
                            St. Joseph
                            Cathedral Parish
                        </p>
                        <p class="mt-3 text-lg text-gray-300">The Saint Joseph the Patriarch Cathedral Parish, otherwise
                            known as Alaminos Cathedral, is a Catholic cathedral located at Barangay Poblacion in the
                            city of Alaminos, Pangasinan, Philippines. Dedicated to Saint Joseph the Patriarch, it has
                            been the episcopal seat of the Diocese of Alaminos since 1985. </p>
                        <div class="mt-8">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('about.index') }}"
                                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                                    Discover more
                                    <!-- Heroicon name: solid/external-link -->
                                    <svg class="-mr-1 ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                        <path
                                            d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="py-10">
            <div class=" mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
                <div class=" mx-auto divide-y-2 divide-gray-200">
                    <h2 class="text-center text-3xl font-extrabold font-playfair text-white sm:text-4xl">Frequently
                        asked
                        questions
                    </h2>
                    <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                        @foreach ($faqs as $faq)
                        <div class="pt-6">
                            <dt class="text-lg">
                                <!-- Expand/collapse question button -->
                                <button type="button"
                                    class="text-left w-full flex justify-between items-start text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                    <span class="font-medium text-gray-100">
                                        {{ $faq["question"] }}
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" id="faq-0">
                                <p class="text-base text-gray-300">
                                    {{ $faq["answer"] }}
                                </p>
                            </dd>
                        </div>
                        @endforeach

                        <!-- More questions... -->
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-landing-page-layout>