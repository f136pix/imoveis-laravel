<!-- props params para render do card-->
@props(['item'])

<x-card> 
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ $item->logo ? asset('storage/'.$item->logo) : asset('/images/no-image.png') }}" alt="" /> <!-- if item tem logo, acessando em /storage/item->logo else acessando a logo padrão -->
        <div>
            <h3 class="text-2xl">
                <a href="/oportunidades/{{ $item->id }}">{{ $item->titulo }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $item->empresa }}</div>
                <x-item-tags :tagsCsv="$item->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $item->local }}
            </div>
        </div>
    </div>
</x-card>
