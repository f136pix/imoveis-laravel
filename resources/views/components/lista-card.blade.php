<!-- props params para render do card-->
@props(['item'])

<x-card> 
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/oportunidade/{{ $item->id }}">{{ $item->titulo }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $item->empresa }}</div>
                <x-item-tags :tagsCsv="$item->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $item->local }}
            </div>
        </div>
    </div>
</x-card>
