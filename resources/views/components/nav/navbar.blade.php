<nav id="navbar"
    class=" fixed left-0 top-0 right-0 z-50 transition duration-500 text-white px-4 md:px-12 bg-transparent ">

    <div class="flex flex-col justify-between items-center max-w-screen-max mx-auto  ">

        <div class="flex justify-between items-center w-full lg:border-b py-4 sm:py-4 ">

            <div class="hidden lg:flex items-center gap-6 ">
                <x-nav.language-switcher />
                <div class="flex items-center gap-4">

                    <a href="tel:+48{{$home->phone}}" aria-label="Telefon">
                        <x-lucide-phone class="w-4 hover:scale-105 duration-300" />
                    </a>
                    <a href="mailto:{{$home->mail}}" aria-label="Email">
                        <x-lucide-mail class="w-4  hover:scale-105 duration-300" />
                    </a>
                </div>
            </div>

            <a href="{{ route('home') }}"
                class="lg:absolute lg:left-1/2 transform lg:-translate-x-1/2 flex flex-col justify-center items-center gap-1 ">
                <img src="{{ asset('storage/' . $home->logo) }}" alt="logo Hotelu Jan w Krakowie" width="96" height="50"
                    class=" w-24 " />
            </a>
            <x-ui.link-button id="nav-booking--light" type="primary" href="{{$home->booking_link}}"
                aria-label="Rezerwuj" class="hidden lg:block" target="_blank">{{__('navbar.book')}}
            </x-ui.link-button>
            <div class="lg:hidden ">
                <x-nav.hamburger />
            </div>

        </div>
        <div id="nav-links" class="max-w-screen-2xl mx-auto py-3.5 hidden lg:block ">
            <ul class="flex gap-6 xl:gap-10 2xl:gap-12">

                <li
                    class=" opacity-70 lg:opacity-100 hover:opacity-100 duration-300 flex justify-center items-center group">
                    <a href={{route('home')}} class=" text-fontWhite" aria-label="Strona główna">
                        <x-lucide-home class="w-4 group-hover:scale-110 duration-500" />
                    </a>
                </li>


                <x-nav.menu-item href="{{route('about')}}">{{__('navbar.about')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('apartment.index')}}">{{__('navbar.rooms')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{$home->booking_link}}">
                    {{__('navbar.offers')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('local-attractions')}}">{{__('navbar.local-attractions')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{route('transfers')}}">{{__('navbar.transfers')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{route('gallery')}}">{{__('navbar.gallery')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('safety')}}">{{__('navbar.safety')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('contact')}}">{{__('navbar.contact')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('other-apartments')}}">{{__('navbar.other-objects')}}</x-nav.menu-item>

            </ul>

        </div>

    </div>
</nav>




{{-- MOBILE MENU --}}
<x-nav.menu />