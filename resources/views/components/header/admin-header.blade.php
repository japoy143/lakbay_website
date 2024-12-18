@props(['is_add' => false, 'btn_name' => ''])

<div class=" flex flex-row w-full justify-between items-center font-medium pb-4 border-b-2">
    <h1>{{ $slot }}</h1>
    @if ($is_add)
        <a href="{{ route('addhotel') }}" class=" btn font-medium">{{ $btn_name }}</a>
    @endif
</div>
