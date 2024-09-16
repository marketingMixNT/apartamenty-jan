<!--CONTAINER-->
<section id="o-nas" class="py-8 lg:pt-20 ">
    <x-container class="max-w-screen-xl ">

        {{--
        <x-heading heading="Prawdziwy Krakowski Urok" subheading="Lorem ipsum dolor sit amet" /> --}}



        <div class="grid lg:grid-cols-2 gap-24 pt-12 lg:py-20">

            {{-- item --}}
            <div
                class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 order-1 lg:order-none">
                <img src="{{asset('assets/images/wspolne/wspolne-9.webp')}}" alt="wnętrze hotelu Jan w Krakowie"
                    class="aspect-[4/3]  object-cover w-full  shadow-md order-1 lg:order-none" loading="lazy"
                    width="500" height="500" />
                <x-text class="lg:mr-20"> Oferujemy komfortowe pokoje, przestronne lobby i oranżerię, w
                    której serwujemy śniadania. Nasza obsługa działa 24/7, aby zapewnić naszym gościom pełną
                    satysfakcję i komfortowy pobyt w samym sercu Krakowa.</x-text>

                <div class="self-start">

                    <x-ui.link href="{{route('about')}}" title="dowiedz się więcej" />
                </div>

            </div>


            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 ">
                <div class="space-y-4">
                    <x-title> Gościnność i Wygoda<br> na Starym Mieście</x-title>

                    <x-text class="lg:mr-20">
                        Hotel Jan to połączenie historii i nowoczesności. Mieści się w zabytkowej, 600-letniej
                        kamienicy,
                        oferując gościom wyjątkowy klimat Starego Miasta oraz wygodę dostosowaną do współczesnych
                        potrzeb.
                        Nasz hotel znajduje się zaledwie 50 metrów od Rynku Głównego.
                    </x-text>
                </div>
                <img src="{{asset('assets/images/wspolne/wspolne-6.webp')}}" alt="wnętrze w hotelu Jan w Krakowie"
                    class="aspect-[4/3]  object-cover w-full shadow-md" loading="lazy" width="500" height="500" />
            </div>
        </div>
    </x-container>
</section>