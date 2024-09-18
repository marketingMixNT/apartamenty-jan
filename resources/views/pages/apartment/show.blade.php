<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">

    {{-- header --}}
    <x-header title="{{$apartment->title}}" bgi="{{asset('/storage/' . $apartment->thumbnail)}}" />

    {{-- short_desc --}}
    <section class="pb-8 pt-20 lg:py-20">
        <x-container class="max-w-screen-xl  flex flex-col  relative">

            <div class="grid xl:grid-cols-3   gap-32 mx-auto max-w-screen-xl ">
                <div
                    class="border hidden  sticky top-32 h-[400px] p-12 xl:flex flex-col justify-start items-start gap-8">

                    <h2 class="text-fontDark text-xl uppercase font-light">Zarezerwuj</h2>

                    <div class="flex justify-center items-center gap-4 ">
                        <x-lucide-heart class="w-8 text-accent-400" />
                        <span class="text-sm ">
                            W samym sercu Krakowa
                        </span>
                    </div>
                    <div class="flex justify-center items-center gap-4 ">
                        <x-lucide-maximize class="w-8 text-accent-400" />
                        <span class="text-sm ">
                            Przestronny i komfortowy
                        </span>
                    </div>
                    <div class="flex justify-center items-center gap-4 pb-8">
                        <x-lucide-sun class="w-8 text-accent-400" />
                        <span class="text-sm ">
                            Idealne miejsce na wypoczynek
                        </span>
                    </div>



                    <x-ui.link href="https://booking.profitroom.com/pl/aparthoteljan/home?currency=PLN" target="_blank"
                        title="rezerwuj" />
                </div>
                {{-- <div class="xl:col-span-2 flex flex-col  gap-8 md:px-12"> --}}
                <div class="xl:col-span-2 flex flex-col  gap-8 ">

                    <div class="leading-loose font-light order-1 lg:order-none ">{!!$apartment->short_desc!!}</div>



                    <img src="{{asset('/storage/' . $apartment->thumbnail)}}"
                        alt="zdjęcie przedstawiające apartament {{$apartment->title}} w Hotelu Jan w Krakowie"
                        loading="lazy" class="aspect-[3/2] shadow-md">

                </div>
            </div>






        </x-container>
    </section>

    {{-- description --}}
    <section class="py-8">
        <x-container class="max-w-screen-xl mx-auto">

            <div class="flex flex-col lg:flex-row gap-y-12">

                <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative lg:pr-12 ">


                    @foreach (collect($apartment->gallery)->slice(0, 3) as $img)
                    <img src="{{ asset('storage/' . $img) }}"
                        alt="zdjęcie przedstawiające {{ $apartment->title }} w Hotelu Jan w Krakowie"
                        class="w-full  aspect-square max-h-[500px] object-cover shadow-md" loading="lazy">
                    @endforeach

                </div>
                <div class="w-full lg:w-[45%] lg:pl-12  sticky top-12 space-y-6 h-full">

                    <div class="prose max-w-full font-light">

                        {!! $apartment->desc !!}
                    </div>
                    <div class="prose font-light pt-3">
                        <x-title>Wyposażenie:</x-title>
                        {!! $apartment->equipment !!}
                    </div>
                </div>
            </div>

        </x-container>
    </section>

    {{-- gallery --}}
    <section class="py-20 ">

        {{-- heading --}}
        <div class="max-w-screen-xl mx-auto  px-6 md:px-12 2xl:px-0 text-center pb-4">
            <h2 class="text-4xl sm:text-5xl 2xl:text-6xl tracking-wider font-heading font-extralight ">
                Galeria
            </h2>

        </div>

        {{-- swiper --}}
        <div class="swiper attraction-gallery-swiper">
            <div class="py-10  swiper-wrapper">

                @foreach ($apartment->gallery as $img)
                <a href="{{ asset('storage/' . $img) }}" class=" swiper-slide glightbox">

                    <img src="{{ asset('storage/' . $img) }}"
                        alt="zdjęcie przedstawiające  {{ $apartment->title }} w Hotelu Jan w Krakowie"
                        class=" h-full w-full object-cover aspect-square shadow-md" loading="lazy">
                </a>
                @endforeach
            </div>


        </div>
    </section>

    {{-- cta --}}
    <section>
        <div class="relative  flex flex-col justify-center items-center gap-6 w-full min-h-[600px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-500 "
            style="background-image: url('{{ asset('assets/images/wspolne/wspolne-4.webp') }}')">
            {{-- text --}}
            <div class="max-w-screen-xl text-center  space-y-12">

                <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight text-fontWhite">
                    Zarezerwuj swój wymarzony pobyt</h2>
                <x-text class="text-fontWhite ">Przyjdź i odkryj wyjątkowy komfort oraz luksus w naszym hotelu. Od
                    relaksu w eleganckich pokojach po zachwycające widoki z okien – wszystko to czeka na Ciebie w sercu
                    Tatr. Nasz zespół z pasją dba o każdy detal, aby zapewnić Ci niezapomniane wrażenia i pełne
                    zadowolenie. </x-text>
            </div>
            {{-- btns --}}
            <div class="be-panel hidden md:block  md:px-6  lg:px-32 2xl:px-16  bg-white">
            </div>
            <x-ui.link-button type='primary'
                class="md:hidden absolute mt-12 bottom-16 left-1/2 transform -translate-x-1/2"
                href="https://booking.com" target="_blank" rel="nofollow" aria-label="Rezerwuj">Rezerwuj
            </x-ui.link-button>

        </div>
    </section>


    {{-- other apartments --}}


    <section class="pt-20 pb-16">
        <x-container class="max-w-screen-2xl 2xl:px-12">



            <x-heading-horizontal title="Prawdziwy Krakowski Urok">

       

                <x-text>Nasze apartamenty to połączenie elegancji i komfortu, zlokalizowane w samym sercu Krakowa. Każdy
                    z nich urządzony jest z dbałością o szczegóły, aby zapewnić naszym gościom wyjątkowy pobyt. Z okien
                    roztacza się widok na zabytkowe uliczki, a bliskość Rynku Głównego sprawia, że Kraków jest na
                    wyciągnięcie ręki. Oferujemy przestrzeń do relaksu, nowoczesne udogodnienia oraz prawdziwą krakowską
                    atmosferę.</x-text>


            </x-heading-horizontal>



            <div class="flex flex-col lg:flex-row justify-center items-center gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">

                @foreach ($otherApartments as $apartment)

                <x-apartment-card :apartment="$apartment" size="md:w-[80%] lg:w-1/3" />

                @endforeach

            </div>
            <div class="flex justify-end items-center">

                <x-ui.link href="{{route('apartment.index')}}" title="zobacz wszystkie" />
            </div>

        </x-container>
    </section>


</x-layouts.app>