<div>
    <x-header.admin-header btn_name="Add Customers">
        Edit Customer Page
    </x-header.admin-header>


    <div class=" mt-6">
        <form wire:submit="edit" class=" space-y-4">
            {{-- Customer Name --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Customer Name</label>
                <input type="text" wire:model="customer_name" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Customer Name">
                @error('customer_name')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Customer Email --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Customer Email</label>
                <input type="text" wire:model="customer_email" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Customer Email">
                @error('customer_email')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            {{-- Customer Phone Number --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Customer Phone
                    Number</label>
                <input type="text" wire:model="customer_phone_number" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Customer Phone Number">
                @error('customer_phone_number')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class=" md:w-1/2 lg:px-10 lg:w-1/6 flex flex-row justify-end">
                <button class=" btn" type="submit">edit</button>
            </div>
        </form>
    </div>

</div>
