<nav id="navbar" class=" fixed left-0 top-0 right-0 z-50 transition-all duration-300 text-white px-4 md:px-12 ">
    <!--CONTAINER -->
    <div class="flex flex-col justify-between items-center max-w-screen-max mx-auto  ">
        {{-- TOP --}}
        <div class="flex justify-between items-center w-full lg:border-b py-4 sm:py-4 ">
            
            <div class="hidden lg:flex items-center gap-6 ">
                <x-nav.language-switcher />
                <div class="flex items-center gap-4">

                    <a href="tel:+48124217640">
                        <x-lucide-phone class="w-4 hover:scale-105 duration-300" />
                    </a>
                    <a href="mailto:biuro@jan-krakow.pl">
                        <x-lucide-mail class="w-4  hover:scale-105 duration-300" />
                    </a>
                </div>
            </div>

            <a href="{{ route('home') }}"
                class="lg:absolute lg:left-1/2 transform lg:-translate-x-1/2 flex flex-col justify-center items-center gap-1 ">
                <img src="{{ asset('assets/logo.svg') }}" alt="logo Hotelu Jan w Krakowie" width="96" height="50"
                    class=" w-24 " />
            </a>
            <x-ui.link-button id="nav-booking--light" type="primary"
                href="https://booking.profitroom.com/pl/aparthoteljan/home?currency=PLN" aria-label="Rezerwuj" class="hidden lg:block">Rezerwuj
            </x-ui.link-button>
            <div class="lg:hidden ">
                <x-nav.hamburger />
            </div>

        </div>
        <div id="nav-links" class="max-w-screen-lg mx-auto py-4 hidden lg:block ">
            <ul class="flex gap-12">

                <x-nav.menu-item href="{{route('about')}}">O nas</x-nav.menu-item>
                <x-nav.menu-item href="{{route('apartment.index')}}">Apartamenty</x-nav.menu-item>
                <x-nav.menu-item href="{{route('local-attractions')}}">Lokalne Atrakcje</x-nav.menu-item>
                <x-nav.menu-item href="{{route('gallery')}}">Galeria</x-nav.menu-item>
                <x-nav.menu-item href="{{route('contact')}}">Kontakt</x-nav.menu-item>
                <x-nav.menu-item href="{{route('other-apartments')}}">Pozostałe Obiekty</x-nav.menu-item>
            </ul>

        </div>

    </div>
</nav>
{{-- MOBILE MENU --}}
<x-nav.menu />