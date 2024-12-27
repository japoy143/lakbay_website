<div class="min-h-screen  flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Create a new account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 max-w">
            Or
            <a href="{{ route('admin.login') }}" class="font-medium  text-primary hover:text-primary/80">
                login to your account
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" wire:submit="createAccount">



                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Your Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" wire:model="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-[#FF8383] focus:border-[#FF8383] focus:z-10 sm:text-sm"
                            placeholder="Enter your email address">
                    </div>
                    @error('email')
                        <p class=" text-red-400 text-sm">{{ $message }}</p>
                    @enderror
                </div>



                {{-- Password --}}
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" wire:model="password" type="password" autocomplete="current-password"
                            required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-[#FF8383] focus:border-[#FF8383]  focus:z-10 sm:text-sm"
                            placeholder="Enter your password">
                    </div>
                    @error('password')
                        <p class=" text-red-400 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">
                        Confirm Password
                    </label>
                    <div class="mt-1">
                        <input id="confirm_password" wire:model="password_confirmation" type="password"
                            autocomplete="current-password" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-[#FF8383] focus:border-[#FF8383]  focus:z-10 sm:text-sm"
                            placeholder="Confirm your password">
                    </div>
                </div>



                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                        Create an account
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
