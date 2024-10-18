<nav id="mobile-bottom-nav"
    class="bottom-nav_container fixed -bottom-20 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300  ">

    <x-mobile-button href="{{$home->booking_link}}" target="_blank">
        <x-lucide-pointer class="size-5  text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">{{__('mobile-buttons.book')}}</span>
    </x-mobile-button>

    <x-mobile-button href="{{route('gallery')}}">
        <x-lucide-images class="size-5  text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">{{__('mobile-buttons.gallery')}}</span>
    </x-mobile-button>

    <x-mobile-button href="tel:+48{{$home->phone}}">
        <x-lucide-phone class="size-5  text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">{{__('mobile-buttons.contact')}}</span>
    </x-mobile-button>

    <x-mobile-button href="{{$home->map_link}}" target="_blank">
        <x-lucide-map-pin class="size-5 text-fontWhite" />
        <span class="text-xs uppercase  text-fontWhite">{{__('mobile-buttons.localization')}}</span>
    </x-mobile-button>




</nav>