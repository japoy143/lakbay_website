<div class="card bg-base-100 w-72   md:w-60    lg:w-80 shadow-xl h-[400px]">
    <figure>
        <img src="{{ Vite::asset('storage/app/private/' . $hotel->hotel_img) }}" alt="Shoes" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $hotel->hotel_name }}</h2>
        <p>{{ $hotel->location }}</p>
        <p>{{ Number::currency($hotel->pricing, 'PHP') }}</p>
        <div class="card-actions justify-end">
            @if ($is_admin)
                <a href="{{ route('edithotel', $hotel->id) }}" class="btn">Edit</a>
                <button class="btn" wire:click="delete({{ $hotel->id }})">Delete</button>
            @else
                <a href="{{ route('bookhotel', $hotel->id) }}" wire:navigate class="btn bg-primary text-white">Book</a>
            @endif
        </div>
    </div>
</div>
