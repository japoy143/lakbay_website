<div>


    {{-- HeroSection --}}
    <section class="sm:mt-6 lg:mt-8 mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="my-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
            <div class="sm:text-center lg:text-left lg:pt-10">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Lakbay</span>
                    <span class="block text-primary xl:inline">Hotel Booking</span>
                </h1>
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Discover the world, one adventure at a time. Let your travels tell your story and create memories
                    that last a lifetime.
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-gray-300 md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                            Book now
                        </a>
                    </div>
                </div>
                <!-- End of Button Section -->
            </div>

            <!--   Image Section     -->
            <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-2/3 lg:object-contain"
                    src="{{ Vite::asset('resources/images/travel.jpg') }}" alt="">
            </div>
            <!--   End of Image Section     -->
        </div>

    </section>
    {{-- HeroSectionEnd --}}

    {{-- Hotels Section --}}
    <section class="  flex-col mt-4 h-screen border-solid border-t-2 pt-2">
        <div class=" flex flex-row justify-between mt-2">
            {{-- Dropdown --}}
            <div class="hs-dropdown relative inline-flex">
                <select wire:model.live='sort' id="hs-dropdown-default" type="button"
                    class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    Sort
                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>

                    <option value="latest">Latest</option>
                    <option value="oldest">Oldest</option>
                </select>


            </div>
            {{-- DropdownEnd --}}


            {{-- SearchBox --}}
            <div class="max-w-sm">
                <!-- SearchBox -->
                <div class="relative"s>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                            <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                        </div>
                        <input
                            class="py-3 ps-10 pe-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            type="text" role="combobox" aria-expanded="false" placeholder="Type a hotel"
                            wire:model.live="search" data-hs-combo-box-input="">
                    </div>

                    <!-- SearchBox Dropdown -->
                    <div class="absolute z-50 w-full bg-white border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700"
                        style="display: none;" data-hs-combo-box-output="">
                        <div class="max-h-72 rounded-b-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
                            data-hs-combo-box-output-items-wrapper=""></div>
                    </div>
                    <!-- End SearchBox Dropdown -->
                </div>
                <!-- End SearchBox -->
            </div>
            {{-- SearchBoxEnd --}}
        </div>

        <div class="pt-10 overflow-scroll  flex flex-wrap gap-2  flex-grow ">
            @foreach ($hotels as $hotel)
                <livewire:admin.components.hotel-card wire:key="{{ $hotel->id }}" :$hotel />
            @endforeach
        </div>
    </section>
    {{-- Hotels Section End --}}

    {{ $search }}

</div>
