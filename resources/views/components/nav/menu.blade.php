<div id="menu" class=" menu-close  fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40 ">
    {{-- <div class="modal gap-24"> --}}
        <div
            class="fixed top-[77px] sm:top-[29px] left-0 bottom-0 right-0 flex flex-col justify-center items-center  gap-24 bg-primary-400 text-fontBlack">
            <!--NAV ITEMS-->
            <ul class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-4 xs:gap-8 ">

                <x-nav.menu-item href="{{route('about')}}">O nas</x-nav.menu-item>
                <x-nav.menu-item href="{{route('apartment.index')}}">Apartamenty</x-nav.menu-item>
                <x-nav.menu-item href="{{route('local-attractions')}}">Lokalne Atrakcje</x-nav.menu-item>
                <x-nav.menu-item href="{{route('gallery')}}">Galeria</x-nav.menu-item>
                <x-nav.menu-item href="{{route('contact')}}">Kontakt</x-nav.menu-item>
                <x-nav.menu-item href="{{route('other-apartments')}}">Pozostałe Obiekty</x-nav.menu-item>

            </ul>

            {{-- <img src="/assets/decor--light.png" alt="" class="w-16 md:w-18 2xl:w-20 2xl:my-6" /> --}}
            <!--MOBILE LANGUAGE SWITCHER-->
            <div class=" mt-6 absolute right-5 bottom-5 opacity-100">
                <x-nav.language-switcher />
            </div>
            <!--SOCIAL-->
            <div class="flex justify-center items-center gap-6 absolute left-5 bottom-5 lg:static">
                <a href="https://www.facebook.com/hotel.jan.1?fref=ts" target="_blank" rel="norefferer nofollow">
                    <x-lucide-facebook class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" />
                </a>
                <a href="https://www.instagram.com/hoteljankrakow/" target="_blank" rel="norefferer nofollow">
                    <x-lucide-instagram class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" />
                </a>
                <a href="https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html"
                    target="_blank" rel="norefferer nofollow">
                    <x-lineawesome-tripadvisor class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" />
                </a>







            </div>
        </div>
    </div>