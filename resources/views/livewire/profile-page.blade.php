<div>
    <h1 class=" font-semibold">Profile Page</h1>

    <div class=" mt-8 p-4">
        <form action="" class=" space-y-8" wire:submit="saveProfile({{ Auth::user()->id }})">

            {{-- Name --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Name</label>
                <input type="type" id="input-label" wire:model="name"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter your name">
            </div>

            {{-- Email --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                <input type="email" id="input-label" wire:model="email"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="you@site.com">
            </div>


            {{-- Phone Number --}}
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Phone Number</label>
                <input type="number" id="input-label" wire:model="phone_number"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Enter Your Number">
            </div>

            <div class=" flex flex-row items-center">
                <div>
                    @if (!is_string($user_image))
                        <img src="{{ $user_image->temporaryUrl() }}" class=" h-[54px] w-[54px]" alt="">
                    @else
                        <img src="{{ $user_image == '' ? Vite::asset('resources/svgs/user_profile.svg') : Vite::asset('storage/app/private/' . Auth::user()->user_image) }}"
                            class=" h-[54px] w-[54px]" alt="">
                    @endif
                </div>

                <div class="max-w-sm space-y-3">
                    <label for="small-file-input" class="sr-only">Choose file</label>
                    <input type="file" name="small-file-input" id="small-file-input" wire:model="user_image"
                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
      file:bg-gray-50 file:border-0
      file:me-4
      file:py-2 file:px-4
      dark:file:bg-neutral-700 dark:file:text-neutral-400">
                </div>

            </div>


            <button type="submit" class=" btn-sm btn">Save Profile</button>

        </form>
    </div>
</div>
