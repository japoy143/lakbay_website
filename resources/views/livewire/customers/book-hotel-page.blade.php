<div class=" h-full  w-full  grid  grid-cols-5  ">

    {{-- Hotel Details --}}
    <div class=" col-span-3 flex flex-col">

        <div class="w-full  lg:w-[540px]  h-[400px] pr-2 lg:pr-0 ">
            <img src="{{ Vite::asset('storage/app/private/' . $hotel->hotel_img) }}" alt=""
                class=" w-full h-full object-contain">
        </div>

        <div>

            <h1 class=" font-medium  text-xl">{{ $hotel->hotel_name }}</h1>
            <p>{{ Number::currency($hotel->pricing, 'PHP') }}</p>
            <p>{{ $hotel->location }}</p>
        </div>
    </div>

    {{-- Customer Details  and Payment Method --}}
    <div class=" col-span-2 ">
        <form wire:submit="placebooking" class="space-y-8">

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

            {{-- Location --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Location</label>
                <input type="text" wire:model="location" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Location">
                @error('location')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>


            {{-- Phone Number --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Phone Number</label>
                <input type="number" wire:model="phone_number" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Phone Number">
                @error('phone_number')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Payment Method --}}
            <div>
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Payment Method</label>
                <div class="grid sm:grid-cols-2 gap-2">
                    <label for="hs-radio-in-form"
                        class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                        <input type="radio" wire:model='payment_method'
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-in-form" value="cod">
                        <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">COD</span>
                    </label>

                    <label for="hs-radio-checked-in-form"
                        class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                        <input type="radio" wire:model="payment_method"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-checked-in-form" checked="" value="gcash">
                        <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">G Cash</span>
                    </label>
                </div>
            </div>


            <button class=" btn w-full bg-primary text-white" type="submit">Place Booking</button>
        </form>
    </div>

</div>
