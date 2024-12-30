<div>
    <h1>Dashboard</h1>

    <div class=" mt-4 grid grid-cols-2  ">

        <div class="  h-full w-full">
            {{-- Total Hotels --}}
            <div
                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 lg:w-9/12">
                <div class="p-4 md:p-10">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Total Hotels
                    </h3>
                    <p class="mt-2 text-gray-500 dark:text-neutral-400">
                        {{ $total_hotels }}
                    </p>
                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600"
                        href="{{ route('admin.hotels') }}" wire:navigate>
                        Hotels
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <div class="  h-full w-full">
            {{-- Total Bookings --}}
            <div
                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 lg:w-9/12">
                <div class="p-4 md:p-10">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Total Bookings
                    </h3>
                    <p class="mt-2 text-gray-500 dark:text-neutral-400">
                        {{ $total_bookings }}
                    </p>
                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600"
                        href="{{ route('admin.bookings') }}" wire:navigate>
                        Bookings
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>


    </div>
</div>
