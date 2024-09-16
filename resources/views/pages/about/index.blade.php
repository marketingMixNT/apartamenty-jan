<x-layouts.app title="Hotel Jan Kraków – O nas | Komfort w Sercu Starego Miasta" description="Poznaj historię i wyjątkową atmosferę Hotelu Jan w Krakowie. Zabytkowa kamienica, nowoczesny komfort i gościnność zaledwie 50 metrów od Rynku Głównego.">


    {{-- HEADER --}}
    <x-header title="O nas"
        bgi="{{asset('assets/images/pokoje/pokoje-6.webp')}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading  heading="Odkryj Luksus w Zabytkowej Kamienicy" />

            <div class="space-y-6 pt-12">

                <x-image-text-block
                    img="{{asset('assets/images/wspolne/wspolne-2.webp')}}"
                    >
                    <x-text>Hotel Jan mieści się przy ulicy Grodzkiej 11, zaledwie 50 metrów od Rynku Głównego w Krakowie. To kameralny hotel, który łączy w sobie historyczny urok 600-letniej kamienicy z nowoczesnym komfortem, zapewniając naszym gościom wyjątkowe warunki pobytu. Eleganckie wnętrza i stylowe wyposażenie są w pełni dostosowane do potrzeb współczesnych podróżnych, dbając o to, aby każdy czuł się tutaj jak w domu.</x-text>
                </x-image-text-block>
                <x-image-text-block order="lg:order-1"
                    img="{{asset('assets/images/wspolne/wspolne-1.webp')}}"
                    >
                    <x-text>Nasz hotel oferuje całodobową recepcję, która jest zawsze do Państwa dyspozycji, przestronne lobby oraz windę obsługującą wszystkie piętra. Na parterze znajduje się oranżeria, pełna egzotycznych roślin, która służy jako sala śniadaniowa, a także miejsce do organizacji konferencji i różnego rodzaju wydarzeń. To idealne miejsce, aby cieszyć się spokojem i atmosferą, jaką tylko Hotel Jan może zapewnić.</x-text>
                </x-image-text-block>
                <x-image-text-block
                    img="{{asset('assets/images/wspolne/wspolne-3.webp')}}"
                    >
                    <x-text>Codziennie rano serwujemy śniadania w formie bufetu, które zadowolą każdego smakosza. Oferujemy szeroki wybór świeżych i smacznych potraw, które można delektować się w naszej przytulnej oranżerii. Dbamy o to, aby każdy dzień rozpoczął się od pysznego posiłku w wyjątkowym otoczeniu.</x-text>
                </x-image-text-block>

              
              
            </div>
        </x-container>
    </section>

</x-layouts.app>