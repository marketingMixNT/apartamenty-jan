<x-layouts.app title="Kontakt – Hotel Jan Kraków | Skontaktuj się z Nami" description="Masz pytania lub chcesz dokonać rezerwacji? Skontaktuj się z Hotelem Jan w Krakowie. Jesteśmy do Twojej dyspozycji, zaledwie 50 metrów od Rynku Głównego.">

    {{-- HEADER --}}
    <x-header title="Kontakt"
        bgi="{{asset('assets/images/pokoje/pokoje-19.webp')}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading  heading="Czekamy na Twoją wiadomość" />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

            <div class="order-1 lg:order-none">
                <x-title>Hotel Jan</x-title>
                <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
            
                    <x-contact-box title="E-mail">
                        <a class="link-hover--dark text-xl font-light" href="mailto:biuro@jan-krakow.pl">biuro@jan-krakow.pl</a>
                    </x-contact-box>
            
                    <x-contact-box title="Telefon">
                        <a class="link-hover--dark text-xl font-light mb-2" href="tel:+48124217640">+48 12 421 76 40</a>
                        <a class="link-hover--dark text-xl font-light" href="tel:+48124301969">+48 12 430 19 69</a>
                    </x-contact-box>
            
                    <x-contact-box title="Adres">
                        <a class="link-hover--dark text-xl font-light" href="https://maps.app.goo.gl/jytJpoJNhHMk9gAp9">Grodzka 11<br>31-006 Kraków</a>
                    </x-contact-box>
            
                    <x-contact-box title="Social Media">
                        

                        <div class="flex justify-start  items-center gap-3">
                            <a href="https://www.facebook.com/hotel.jan.1?fref=ts" target="_blank" rel="norefferer nofollow">
                                <x-lucide-facebook class="w-8 hover:scale-110 duration-300" />
                            </a>
                           
                            <a href="https://www.instagram.com/hoteljankrakow/" target="_blank" rel="norefferer nofollow">
                                <x-lucide-instagram class="w-8 hover:scale-110 duration-300" />
                            </a>
                            <a href="https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html"
                                target="_blank" rel="norefferer nofollow">
                                <x-lineawesome-tripadvisor class="w-8 hover:scale-110 duration-300" />
                            </a>
        
                        </div>
                    </x-contact-box>
            
                </div>
                <div class="flex flex-col gap-2">

                    <h3 class="text-lg font-light uppercase">Recepcja czynna całą dobę</h3>
                    <h3 class="text-lg font-light uppercase">Konto Bankowe</h3>
                    <span class="font-light">bank: mBank</span>
                    <span class="font-light">numer konta: 59 1140 2004 0000 3302 7685 1219</span>
                    <span class="font-light">SWIFT: BREX PL PW MBK</span>
                </div>
                
            </div>

            

            <livewire:contact-form/>

</section>

        </x-container>
    
</x-layouts.app>
