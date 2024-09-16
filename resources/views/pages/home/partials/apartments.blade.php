<section class="pt-8 pb-24">
    <x-container class="max-w-screen-2xl 2xl:px-12">



        <x-heading-horizontal title="Prawdziwy Krakowski Urok">


            <x-text>Nasze apartamenty to połączenie elegancji i komfortu, zlokalizowane w samym sercu Krakowa. Każdy
                z nich urządzony jest z dbałością o szczegóły, aby zapewnić naszym gościom wyjątkowy pobyt. Z okien
                roztacza się widok na zabytkowe uliczki, a bliskość Rynku Głównego sprawia, że Kraków jest na
                wyciągnięcie ręki. Oferujemy przestrzeń do relaksu, nowoczesne udogodnienia oraz prawdziwą krakowską
                atmosferę.</x-text>


        </x-heading-horizontal>


        {{-- <div class="flex flex-col pt-12 "> --}}
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">

                @foreach ($apartments as $apartment)

                <x-apartment-card :apartment="$apartment" />

                @endforeach

            </div>

    </x-container>
</section>