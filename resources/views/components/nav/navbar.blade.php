<nav id="navbar" class=" fixed left-0 top-0 right-0 z-50 transition-all duration-300 text-white px-4 md:px-12 ">
    <!--CONTAINER -->
    <div class="flex flex-col justify-between items-center max-w-screen-max mx-auto  ">
        {{-- TOP --}}
        <div class="flex justify-between items-center w-full border-b py-4 sm:py-4 ">
            <div class="lg:hidden">
                <x-nav.hamburger />
            </div>
            <div class="hidden lg:flex items-center gap-6 ">
                <x-nav.language-switcher />
                <div class="flex items-center gap-4">

                    <a href="tel:+123456789">
                        <x-lucide-phone class="w-4" />


                    </a>
                    <a href="mailto:hello@marketingmix.pl">
                        <x-lucide-mail class="w-4" />


                    </a>
                </div>
            </div>

            <a href="{{ route('home') }}"
                class="absolute left-1/2 transform -translate-x-1/2 flex flex-col justify-center items-center gap-1">
                <img src="{{ asset('assets/logo.svg') }}" alt="logo Hotelu Górski Raj" width="96" height="50"
                    class=" w-16 sm:w-24 " />
            </a>
            <x-ui.link-button id="nav-booking--light" type="primary" href="#" class="" aria-label="Rezerwuj">Rezerwuj</x-ui.link-button>
         
        </div>
        <div class="max-w-screen-lg mx-auto py-4 hidden lg:block">
            <ul class="flex gap-12">
                <li class="text-base link-hover"><a  href="{{route('about')}}">O nas</a></li>
                <li class="text-base link-hover"><a  href="{{route('apartment.index')}}">Apartamenty</a></li>
                <li class="text-base link-hover"><a  href="{{route('local-attractions.index')}}">Lokalne Atrakcje</a></li>
                <li class="text-base link-hover"><a  href="/">Galeria</a></li>
                <li class="text-base link-hover"><a  href="/">Kontakt</a></li>
                <li class="text-base link-hover"><a  href="/">Obiekt w Zakopanem</a></li>
            </ul>

        </div>
       
    </div>
</nav>