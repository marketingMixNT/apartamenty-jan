<x-layouts.app title="Pozostałe Obiekty" description="pozostałe obiekty about">


    {{-- HEADER --}}
    <x-header title="Pozostałe Obiekty"
        bgi="https://images.unsplash.com/photo-1582731489225-24fc0a720737?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading subheading="Hotel Góralski Raj" heading="Apartamenty Pełne Uroku" />

            <div class="space-y-6">


                {{-- content --}}
                <div class="flex flex-col lg:flex-row mt-16 lg:mt-32">

                    <div class="w-full lg:w-[60%] lg:pr-20 description order-1 lg:order-none">

                        <h2>Apartament w Zako</h2>
                        <p>Lorem ipsum dolor sit amet
                            consectetur, adipisicing elit. Exercitationem reiciendis vitae similique ducimus hic?
                            Placeat ut
                            sunt beatae rem aliquid error explicabo labore modi natus! Impedit animi velit mollitia
                            rerum.</p>

                           <x-ui.link-button href="#">Więcej</x-ui.link-button>
                    </div>


                    <div class="w-full lg:w-[40%] relative "><img
                            src="https://images.unsplash.com/photo-1582731489225-24fc0a720737?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D}"
                            alt="sadsa" class="sticky top-32 h-[500px] w-full object-cover"></div>
                </div>





            </div>
        </x-container>
    </section>

</x-layouts.app>