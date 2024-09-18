<x-layouts.app title="Regulamin – Hotel Jan Kraków"
    description="Hotel Jan w Krakowie – stylowe pokoje 50 metrów od Rynku Głównego. Komfort, gościnność i klimat Starego Miasta w samym sercu Krakowa.">

    {{-- HEADER --}}
    <x-header title="Regulamin" bgi="{{asset('assets/images/pokoje/pokoje-11.webp') }}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-lg prose">
             {!! $regulations->content !!}





        </x-container>
    </section>



</x-layouts.app>