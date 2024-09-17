<x-layouts.app title="Lokalne Atrakcje Krakowa – Odkryj Okolicę z Hotelem Jan" description="Poznaj najciekawsze atrakcje Krakowa w pobliżu Hotelu Jan. Zwiedzaj Rynek Główny, Wawel, Kazimierz i inne zabytki z idealną bazą noclegową w samym sercu miasta.">

    {{-- HEADER --}}
    <x-header title="Lokalne Atrakcje"
        bgi="{{asset('assets/images/krakow-1.webp')}}" />

    <x-container class="max-w-screen-xl py-20">
        <x-heading-horizontal title="Lokalne Atrakcje" subtitle="Podróż kulinarna, która pozostaje w pamięci"
            text="lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, velit. Qui provident, eligendi odio, earum alias fuga ratione, voluptates harum atque maiores incidunt magnam numquam ea quaerat dignissimos! Quidem, perferendis." />


        <div class="flex flex-col gap-40">


            @foreach ($attractions as $attraction)
            <div class="grid lg:grid-cols-2 gap-12">
                <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                    <h2 class="font-heading text-5xl">{{ $attraction['title'] }}</h2>
                    <p class=" text">{!! $attraction['description'] !!}</p>

                </div>
                @foreach ($attraction['images'] as $img)
                <div class="   mx-auto overflow-hidden ">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src=" {{ asset('/storage/' . $img) }}" alt="{{ $attraction['title'] }}" loading="lazy"
                            width="630" height="500"
                            class="w-full h-full object-cover hover:scale-110 duration-500  aspect-square"></a>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>


    </x-container>
</x-layouts.app>