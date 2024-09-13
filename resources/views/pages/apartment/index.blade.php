<x-layouts.app title="Apartamenty" description="ads">
   
    {{-- HEADER --}}
    <x-header title="Apartamenty" bgi="https://images.unsplash.com/photo-1582731489225-24fc0a720737?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/>

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">
        <div class="w-full mx-auto flex justify-center items-center">
            <x-heading-horizontal subtitle="Hotel Góralski Raj" title="Apartamenty Pełne Uroku"
                decor="Komfort i spokój na każdą porę roku"
                text="Nasze apartamenty to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas apartament idealnie dopasowany do Twoich potrzeb i oczekiwań." />
        </div>

        @foreach ($apartments as $apartment)
            <x-apartment-card 
            :apartment='$apartment'
            />
        @endforeach

        </x-container>
    </section>
</x-layouts.app>