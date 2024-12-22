<div>
    <div class=" font-medium">
        <h1>Edit Hotel Page</h1>
    </div>

    <div class=" mt-10">

        <form wire:submit="edit({{ $hotel->id }})" class=" space-y-4">
            {{-- Hotel Name --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Hotel Name</label>
                <input type="text" wire:model="hotel_name" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Hotel Name">
                @error('hotel_name')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            {{-- Hotel Location --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Hotel Location</label>
                <input type="text" wire:model="location" id="input-label"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Hotel Location">
                @error('hotel_location')
                    <p class=" text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            {{-- Hotel Pricing --}}
            <div class="w-1/2 lg:w-1/4 ">
                <label for="" class="text-sm font-medium  ">Hotel Pricing</label>
                <input type="number" wire:model='pricing' id="" class="mt-2 block" ">
                @error('hotel_pricing')
    <p class=" text-red-500 text-sm">{{ $message }}</p>
@enderror
            </div>
            {{-- Hotel PricingEnd --}}

            {{-- Hotel Image --}}
            <div class=" rounded-md border-solid border-2 min-h-[300px] w-full lg:w-1/2 px-10 pt-4 flex flex-col">
                <h1 class=" font-medium">Hotel Image</h1>
                <div class=" flex-1 flex items-center justify-center   ">
                @if ($hotel_img)
                <img src="{{ Vite::asset('storage/app/private/' . $hotel->hotel_img) ?? $hotel_img->temporaryUrl() }}"
                    alt="" class=" object-fill ">
                @endif
            </div>
            <div>
                <input type="file" wire:model="hotel_img" class="file-input file-input-ghost w-full max-w-xs" />
            </div>
            @error('hotel_image')
                <p class=" text-red-500 text-sm">{{ $message }}</p>
            @enderror
    </div>


    <div class=" flex justify-end w-full lg:w-1/2">
        <button class="btn" type="submit">edit</button>
    </div>
    </form>
</div>
</div>
