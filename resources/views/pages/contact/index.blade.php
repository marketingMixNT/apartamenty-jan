<x-layouts.app title="Kontakt – Hotel Jan Kraków | Skontaktuj się z Nami" description="Masz pytania lub chcesz dokonać rezerwacji? Skontaktuj się z Hotelem Jan w Krakowie. Jesteśmy do Twojej dyspozycji, zaledwie 50 metrów od Rynku Głównego.">

    {{-- HEADER --}}
    <x-header title="Kontakt"
        bgi="https://images.unsplash.com/photo-1582731489225-24fc0a720737?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading  heading="Czekamy na Twoją wiadomość"
            subheading="Nawiąż Kontakt i Zacznij Swoją Przygodę" />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 mt-24">

            <div>
                <h2 class="text-start text-5xl">Hotel Górski Raj</h2>
                <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
            
                    <x-contact-box title="E-mail">
                        <a class="link-hover text-xl " href="mailto:hello@marketingmix.pl">hello@marketingmix.pl</a>
                    </x-contact-box>
            
                    <x-contact-box title="Telefon">
                        <a class="link-hover text-xl " href="tel:+48453400244">+48 453 400 244</a>
                    </x-contact-box>
            
                    <x-contact-box title="Adres">
                        <a class="link-hover text-xl " href="https://maps.app.goo.gl/Hhf8gGYHjRX29BFY9">Ludźmierska 26A<br>34-400 Nowy Targ</a>
                    </x-contact-box>
            
                    <x-contact-box title="Social Media">
                        <div class="flex justify-center sm:justify-start items-center gap-3">
                            <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank"><img
                                    src="{{ asset('/assets/icons/facebook--dark.svg') }}" alt="logo Facebook'a"
                                    class="w-8 hover:scale-110 duration-300" /></a>
                            <a href="https://www.instagram.com/marketingmix_pl/"
                                target="_blank"><img src="{{ asset('/assets/icons/instagram--dark.svg') }}" alt="logo TripAdvisor"
                                    class="w-8 hover:scale-110 duration-300" /></a>
                        </div>
                    </x-contact-box>
            
                </div>
            </div>

            

            <livewire:contact-form/>

</section>

        </x-container>
    
</x-layouts.app>
