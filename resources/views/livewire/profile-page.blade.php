<div>
    <h1 class=" font-semibold">Profile Page</h1>

    <div class=" mt-8">
        <form action="" class=" space-y-4">

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
            <div class="max-w-sm">
                <div>
                    <img src="{{ $user_image === '' ? Vite::asset('resources/svgs/user_profile.svg') : $user_image }}"
                        class=" h-[44px] w-[44px]" alt="">
                </div>
                <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                    <input type="file"
                        class="block w-full text-sm text-gray-500
        file:me-4 file:py-2 file:px-4
        file:rounded-lg file:border-0
        file:text-sm file:font-semibold
        file:bg-blue-600 file:text-white
        hover:file:bg-blue-700
        file:disabled:opacity-50 file:disabled:pointer-events-none
        dark:text-neutral-500
        dark:file:bg-blue-500
        dark:hover:file:bg-blue-400
      ">
                </label>

            </div>
        </form>
    </div>
</div>
