<x-layouts.app title="Apartamenty Hotelu Jan Kraków – Komfort i Styl w Centrum Miasta"
    description="Zarezerwuj apartament w Hotelu Jan w Krakowie. Stylowe i wygodne apartamenty tuż przy Rynku Głównym, idealne na relaks i pobyt w sercu Starego Miasta.">

    {{-- HEADER --}}
    <x-header title="Apartamenty" bgi="{{asset('assets/images/pokoje/pokoje-17.webp')}}" />

    {{-- MAIN --}}
    <section class="py-10 lg:py-20">
        <x-container class="max-w-screen-2xl">
            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="Stylowe Apartamenty w Sercu Krakowa"
                    decor="Komfort i spokój na każdą porę roku">
                    <x-text>Oferujemy komfortowe i eleganckie apartamenty,
                        zlokalizowane zaledwie kilka kroków od Rynku Głównego. Każdy apartament został urządzony z myślą
                        o
                        wygodzie i wyjątkowej atmosferze, zapewniając idealne warunki zarówno do wypoczynku, jak i
                        pracy.
                        Wybierz swój idealny apartament i ciesz się pobytem w samym sercu Krakowa!</x-text>
                </x-heading-horizontal>
            </div>

            @foreach ($apartments as $apartment)
            <x-apartment-card-horizontal :apartment='$apartment' />
            @endforeach

        </x-container>
    </section>
</x-layouts.app>