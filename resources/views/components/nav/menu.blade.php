<div id="menu"
    class=" menu-close bg-red-500 fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40 " >
    <div class="modal gap-24">
        <!--NAV ITEMS-->
        <ul class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-4 xs:gap-8">

            <x-nav.menu-item href="/">Apartamenty</x-nav.menu-item>
            {{-- <x-nav.menu-item href="{{route('offers.index')}}">Oferty Specjalne</x-nav.menu-item>
            <x-nav.menu-item href="{{route('hotel-attractions.index')}}">Udogodnienia Hotelowe</x-nav.menu-item>
            <x-nav.menu-item href="{{route('local-attractions.index')}}">Lokalne Atrakcje</x-nav.menu-item>
            <x-nav.menu-item href="{{route('gallery.index')}}">Galeria</x-nav.menu-item>
            <x-nav.menu-item href="{{route('contact.index')}}">Kontakt</x-nav.menu-item>
            <x-nav.menu-item href="/blogs">Aktualności</x-nav.menu-item> --}}
        </ul>

        {{-- <img src="/assets/decor--light.png" alt="" class="w-16 md:w-18 2xl:w-20 2xl:my-6" /> --}}
        <!--MOBILE LANGUAGE SWITCHER-->
        <div class=" mt-6 absolute right-5 bottom-5 opacity-100">
           <x-nav.language-switcher/>
        </div>
          <!--SOCIAL-->
        <div class="flex justify-center items-center gap-6 absolute left-5 bottom-5 lg:static">
            <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank"><img src="{{ asset('/assets/icons/facebook--white.svg') }}" alt="facebook Hotel Górski Raj"
                    class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" /></a>
            <a href="https://www.instagram.com/marketingmix_pl/" target="_blank"><img src="{{ asset('/assets/icons/instagram--white.svg') }}" alt="instagram Hotel Górski Raj"
                    class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" /></a>
           
        </div>
    </div>
</div>