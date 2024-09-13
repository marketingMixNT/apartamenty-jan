<!--CONTAINER-->
<section id="o-nas" class="pt-20 pb-8">
    <x-container class="max-w-screen-xl ">

        <x-heading heading="Prawdziwy Krakowski Urok" subheading="Lorem ipsum dolor sit amet" />



        <div class="grid lg:grid-cols-2 gap-24 pt-12 lg:py-20">

            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 order-1 lg:order-none">
                <img src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="alt" class="aspect-[4/3]  object-cover w-full  shadow-md" loading="lazy" width="500" height="500" />
                <x-text class="lg:mr-20"> Oferujemy komfortowe pokoje, przestronne lobby i oranżerię, w
                    której serwujemy śniadania. Nasza obsługa działa 24/7, aby zapewnić naszym gościom pełną
                    satysfakcję i komfortowy pobyt w samym sercu Krakowa.</x-text>

                <x-ui.link href="/" title="dowiedz się więcej" />

            </div>


            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 ">
                <div class="space-y-4">
                    <x-title> Gościnność i Wygoda<br> na Starym Mieście</x-title>

                    <x-text class="lg:mr-20">
                        Hotel Jan to połączenie historii i nowoczesności. Mieści się w zabytkowej, 600-letniej kamienicy,
                        oferując gościom wyjątkowy klimat Starego Miasta oraz wygodę dostosowaną do współczesnych potrzeb.
                        Nasz hotel znajduje się zaledwie 50 metrów od Rynku Głównego.
                    </x-text>
                </div>
                <img src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="alt" class="aspect-[4/3]  object-cover w-full shadow-md" loading="lazy" width="500" height="500" />
            </div>
        </div>
    </x-container>
</section>