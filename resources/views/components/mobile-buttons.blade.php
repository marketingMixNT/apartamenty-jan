<nav id="mobile-bottom-nav"
    class="bottom-nav_container fixed -bottom-20 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300  ">

    <x-mobile-button href="https://booking.profitroom.com/pl/aparthoteljan/home?currency=PLN" target="_blank">
        <x-lucide-pointer class="size-6 xs:size-7 text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">Rezerwuj</span>
    </x-mobile-button>

    <x-mobile-button href="{{route('gallery')}}">
        <x-lucide-images class="size-6 xs:size-7 text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">Galeria</span>
    </x-mobile-button>

    <x-mobile-button href="{{route('contact')}}">
        <x-lucide-phone class="size-6 xs:size-7 text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">Kontakt</span>
    </x-mobile-button>

    <x-mobile-button href="https://maps.app.goo.gl/Zi7FXxCtHkR9TkG66" target="_blank">
        <x-lucide-map-pin class="size-6 xs:size-7 text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">Lokalizacja</span>
    </x-mobile-button>




</nav>