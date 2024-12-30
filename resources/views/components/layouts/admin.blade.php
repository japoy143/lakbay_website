<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles


</head>

<body class=" font-primary ">
    @livewireScripts



    {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <main class="h-screen w-screen grid grid-cols-6">
        {{-- Sidebar --}}
        <div class="  col-span-2 lg:col-span-1 border-solid border-r p-10 font-medium text-lg ">
            <h1>Lakbay</h1>

            <ul class=" text-base font-normal pt-4 space-y-4">

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex flex-row gap-2" wire:navigate>
                        <img src="{{ Vite::asset('resources/svgs/dashboard.svg') }}" alt="dashboard"
                            class=" h-[24px] w-[24px] ">
                        <p>Dashboard </p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.hotels') }}" class="flex flex-row gap-2" wire:navigate>
                        <img src="{{ Vite::asset('resources/svgs/hotel.svg') }}" alt="hotel"
                            class=" h-[24px] w-[24px] ">
                        <p>Hotels </p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.bookings') }}" class="flex flex-row gap-2" wire:navigate>
                        <img src="{{ Vite::asset('resources/svgs/booking.svg') }}" alt="bookings"
                            class=" h-[24px] w-[24px] ">
                        <p> Bookings</p>
                    </a>
                </li>




                <livewire:admin.auth.logout />



            </ul>
        </div>
        {{-- SidebarEnd --}}

        {{-- Content --}}
        <div class=" col-span-4 lg:col-span-5 p-10"> {{ $slot }}</div>
        {{-- ContentEnd --}}
    </main>
</body>

</html>
