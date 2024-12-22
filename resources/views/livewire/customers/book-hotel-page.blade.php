<div class=" h-full  w-full  grid  grid-cols-5  ">

    {{-- Hotel Details --}}
    <div class=" col-span-3 flex flex-col">

        <div class="w-[400px]  h-[400px] ">
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
    <div class=" col-span-2"></div>

</div>
