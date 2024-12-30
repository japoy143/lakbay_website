<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl text-primary">Lakbay</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a wire:navigate href="/"
                    class=" {{ request()->is('/') ? 'text-primary' : 'text-gray-500' }} font-medium  hover:text-gray-300">Home</a>
            </li>
            {{-- <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li> --}}
            <li><a wire:navigate href="{{ route('packages') }}"
                    class=" {{ request()->is('packages') ? 'text-primary' : 'text-gray-500' }} font-medium   hover:text-gray-300">Packages</a>
            </li>
            <li><a wire:navigate href="{{ route('about') }}"
                    class=" {{ request()->is('about') ? 'text-primary' : 'text-gray-500' }} font-medium  hover:text-gray-300">About</a>
            </li>



        </ul>
    </div>
    <div class="navbar-end">

        @guest
            <a wire:navigate href="{{ route('login') }}" class="btn bg-primary text-white">Login</a>
        @endguest
        @auth
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="{{ Auth::user()->name }}" src="{{ Vite::asset('resources/svgs/user_profile.svg') }}"
                            class=" h-[20px] w-[20px]" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between">
                            Profile
                        </a>
                    </li>

                    <li><a wire:click.prevent="logout">Logout</a></li>
                </ul>
            </div>
        @endauth
    </div>
</div>
