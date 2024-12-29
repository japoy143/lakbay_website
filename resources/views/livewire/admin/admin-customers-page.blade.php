<div>
    <x-header.admin-header is_add="true" btn_name="Add Customers">
        Customer
    </x-header.admin-header>

    {{-- Search Box --}}
    <div class=" flex flex-row w-full justify-end relative">
        <div class="max-w-sm ">
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
                        type="text" role="combobox" aria-expanded="false" placeholder="Type a name"
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
    </div>
    {{-- Search Box End --}}

    {{-- Table --}}
    <div class="flex flex-col mt-4 flex-grow">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Customer Name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Email</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Phone Number</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($customers as $key => $customer)
                                <tr wire:key="{{ $key }}"
                                    class=" {{ $key % 2 == 0 ? 'odd:bg-white' : 'even:bg-gray-100' }}   hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700 ">
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $customer->name }}</td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $customer->email }}</td>

                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $customer->phone_number }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">

                                        <img src="{{ Vite::asset('resources/svgs/ellipses.svg') }}"
                                            class="h-[24px] w-[24px] cursor-pointer" onclick="showOptions(event)" />

                                        <div id="options-{{ $key }}"
                                            class="hidden absolute z-10 mt-2 bg-white border border-gray-200 rounded-md shadow-md  right-36 ">
                                            <a href="{{ route('edit-customer', $customer->id) }}" wire:navigate
                                                class="block px-4 py-2 text-sm text-orange-400 ">Edit
                                            </a>
                                            <button class="block px-4 py-2 text-sm text-red-500 "
                                                wire:click="delete({{ $customer->id }})">Delete
                                            </button>
                                        </div>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Table End --}}
</div>


{{-- Show options button --}}
<script>
    function showOptions(event) {
        const optionsDiv = event.target.nextElementSibling;
        optionsDiv.classList.toggle('hidden');
    }
</script>
</div>
