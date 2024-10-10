<!--CONTAINER-->
<section id="o-nas" class="pt-16 pb-8 ">
    <x-container class="max-w-screen-xl ">





        <div class="grid lg:grid-cols-2 gap-24 pt-12 lg:py-20">

            {{-- item --}}
            <div
                class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 order-1 lg:order-none">
                <img src="{{asset('assets/images/wspolne/wspolne-9.webp')}}" alt="wnętrze hotelu Jan w Krakowie"
                    class="aspect-[4/3]  object-cover w-full  shadow-md order-1 lg:order-none" loading="lazy"
                    width="500" height="500" />
                <x-text class="lg:mr-20">{{__('home.about.text-2')}}</x-text>

                <div class="self-start">

                    <x-ui.link href="{{route('about')}}" title="{{__('home.about.link')}}" aria="Strona o nas" />
                </div>

            </div>


            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 ">
                <div class="space-y-4">
                    <x-title>{{__('home.about.heading')}}<br />{{__('home.about.heading-2')}}</x-title>

                    <x-text class="lg:mr-10">
                        {{__('home.about.text-1')}}


                    </x-text>
                    <x-text class="lg:mr-10">
                        {{__('home.about.location')}}
                        <ul class="leading-loose font-light">
                            <li><span class="font-medium">{{__('home.about.location-1')}}</span> - {{__('home.about.location-1-time')}}</li>
                            <li> <span class="font-medium">{{__('home.about.location-2')}}</span> - {{__('home.about.location-2-time')}}</li>
                            <li> <span class="font-medium">{{__('home.about.location-3')}}</span> - {{__('home.about.location-3-time')}}</li>
                            <li> <span class="font-medium">{{__('home.about.location-4')}}</span> - {{__('home.about.location-4-time')}}</li>
                        </ul>
                    </x-text>
                </div>
                <img src="{{asset('assets/images/wspolne/wspolne-6.webp')}}" alt="wnętrze w hotelu Jan w Krakowie"
                    class="aspect-[4/3]  object-cover w-full shadow-md" loading="lazy" width="500" height="500" />
            </div>
        </div>
    </x-container>
</section>