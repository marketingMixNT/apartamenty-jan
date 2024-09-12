    <!--CONTAINER-->
    <section id="o-nas"
    >
    <div class="wrapper max-w-screen-2xl mx-auto">
        <!--HEADING-->
        {{-- <x-base.heading
            subheading="Zajazd Śleboda"
            heading="Poznaj nas"
            decor="Twoja Przystań w Sercu Gór"
        /> --}}
        <!--CONTENT-->
        <h2>Prawdziwy Krakowski Urok</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 py-12 lg:py-24">
            <div>
                  

                <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[90%] lg:w-auto mx-auto image-animation">
                    <img
                        src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-full h-full object-cover "
                        alt="wnętrze restauracji Zajazd Śleboda"
                        loading="lazy"
                        width="600"
                        height="400"
                       

                    />
                </div>
                  
                  <div class="flex flex-col justify-center items-start gap-6 ml-4 mt-16">
                    <p class="text  text-animation"> Oferujemy komfortowe pokoje, przestronne lobby i oranżerię, w której serwujemy śniadania. Nasza obsługa działa 24/7, aby zapewnić naszym gościom pełną satysfakcję i komfortowy pobyt w samym sercu Krakowa.</p>
                    <x-ui.link-button href="{{route('about')}}">Pokoje</x-ui.link-button>
                    <x-ui.link-button href="{{route('about')}}">Restauracja</x-ui.link-button>
                   
                 </div>
                
            </div>
            <!--TEXT-->
            <div class="flex flex-col justify-center items-start gap-12">
                <h2 class="h2">
                    Gościnność i Wygoda na Starym Mieście
                </h2>
                <p class="text sm:mr-52  text-animation">
                   

                    Hotel Jan to połączenie historii i nowoczesności. Mieści się w zabytkowej, 600-letniej kamienicy, oferując gościom wyjątkowy klimat Starego Miasta oraz wygodę dostosowaną do współczesnych potrzeb. Nasz hotel znajduje się zaledwie 50 metrów od Rynku Głównego.
                </p>
                <!--IMG-->
                <div class="overflow-hidden mt-6 lg:mt-12 w-full md:w-[90%] lg:w-auto mx-auto image-animation">
                    <img
                        src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-full h-full object-cover blurry-image"
                        alt="wnętrze restauracji Zajazd Śleboda"
                        loading="lazy"
                        width="600"
                        height="400"

                    />
                </div>
            </div>
        </div>
    </div>
    </section>
  