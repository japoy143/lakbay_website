<div class=" flex flex-col h-screen">
    {{-- header --}}
    <x-header.admin-header is_add="true" btn_name="Add Hotel">
        Hotel
    </x-header.admin-header>
    {{-- headerEnd --}}

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
                        <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
    {{-- allHotels --}}
    {{-- @dump($hotels) --}}
    {{-- must occupy the remaining space --}}
    <div class=" pt-10  overflow-scroll  flex flex-wrap gap-2  flex-grow  ">
        @foreach ($hotels as $hotel)
            <livewire:admin.components.hotel-card :$hotel :is_admin="true" wire:key="{{ $hotel->id }}" />
        @endforeach
    </div>
    {{-- allHotelsEnd --}}

    <p>{{ $search }}</p>

</div>
