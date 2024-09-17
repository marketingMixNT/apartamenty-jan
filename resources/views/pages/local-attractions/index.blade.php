<x-layouts.app title="Lokalne Atrakcje Krakowa – Odkryj Okolicę z Hotelem Jan"
    description="Poznaj najciekawsze atrakcje Krakowa w pobliżu Hotelu Jan. Zwiedzaj Rynek Główny, Wawel, Kazimierz i inne zabytki z idealną bazą noclegową w samym sercu miasta.">

    {{-- HEADER --}}
    <x-header title="Lokalne Atrakcje" bgi="{{asset('assets/images/krakow-1.webp')}}" />

    <x-container class="max-w-screen-xl py-20">
        <x-heading-horizontal title="Lokalne Atrakcje">
            <x-text>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, velit. Qui provident, eligendi odio,
                earum alias fuga ratione, voluptates harum atque maiores incidunt magnam numquam ea quaerat dignissimos!
                Quidem, perferendis.</x-text>
        </x-heading-horizontal>


        <div class="flex flex-col gap-40 pt-20">


            @foreach ($attractions as $attraction)
            <div class="grid lg:grid-cols-2 gap-12">
                <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                    <x-title>{{ $attraction['title'] }}</x-title>
                    <x-text>{!! $attraction['description'] !!}</x-text>

                </div>
                @foreach ($attraction['images'] as $img)
                <div class="   mx-auto overflow-hidden ">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src=" {{ asset('/storage/' . $img) }}" alt="{{ $attraction['title'] }}" loading="lazy"
                           
                            class="w-full h-full object-cover hover:scale-110 duration-500  aspect-[3/2]"></a>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>


    </x-container>
</x-layouts.app>