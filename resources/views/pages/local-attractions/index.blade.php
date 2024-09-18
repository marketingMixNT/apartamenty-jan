<x-layouts.app title="Lokalne Atrakcje Krakowa – Odkryj Okolicę z Hotelem Jan"
    description="Poznaj najciekawsze atrakcje Krakowa w pobliżu Hotelu Jan. Zwiedzaj Rynek Główny, Wawel, Kazimierz i inne zabytki z idealną bazą noclegową w samym sercu miasta.">

    {{-- HEADER --}}
    <x-header title="Lokalne Atrakcje" bgi="{{asset('assets/images/krakow-1.webp')}}" />

    <x-container class="max-w-screen-xl pt-20 pb-28">
        <x-heading-horizontal title="Najlepsze Atrakcje Krakowa">
            <x-text>Kraków to miasto pełne historii i niepowtarzalnego klimatu, a Hotel Jan znajduje się w samym sercu
                tych wyjątkowych atrakcji. Zaledwie kilka kroków dzieli naszych gości od takich miejsc jak Rynek Główny,
                Zamek Królewski na Wawelu czy tętniący życiem Kazimierz. Odkryj malownicze zakątki Starego Miasta,
                zabytki wpisane na listę UNESCO oraz liczne kawiarnie i restauracje, które zachwycą każdego turystę.
            </x-text>
        </x-heading-horizontal>

        


        <section class="flex flex-col gap-20 lg:gap-40 pt-32">

            @foreach ($attractions as $attraction)
            <div class="grid lg:grid-cols-2 gap-12">



                <div class=" relative  flex flex-col gap-6 justify-center  lg:text-left">
                    <x-title>{{ $attraction['title'] }}</x-title>
                    <div class="leading-loose font-light">{!! $attraction['description'] !!}</div>

                </div>
                @foreach ($attraction['images'] as $img)
                <div class="   mx-auto overflow-hidden flex justify-center items-center">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src=" {{ asset('/storage/' . $img) }}" alt="{{ $attraction['title'] }}" loading="lazy"
                            class="w-full  object-cover shadow-md  aspect-square max-w-[550px]"></a>
                </div>
                @endforeach
            </div>
            @endforeach
        </section>


    </x-container>
</x-layouts.app>