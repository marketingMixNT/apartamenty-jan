<!--CONTAINER-->
<section id="o-nas" class="pt-0 md:pt-16 pb-8 ">
    <x-container class="max-w-screen-xl ">





        <div class="grid lg:grid-cols-2 gap-24 pt-12 lg:py-20">

            {{-- item --}}
            <div
                class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 order-1 lg:order-none">
                <img src="{{asset('storage/' . $home->about_images[1])}}" alt="wnętrze hotelu Jan w Krakowie"
                    class="aspect-[4/3]  object-cover w-full  shadow-md order-1 lg:order-none" loading="lazy"
                    width="500" height="500" />
                <x-text-wrapper class="lg:mr-20">  {!!$home->about_text_second!!}</x-text-wrapper>

                <div class="self-start">

                    <x-ui.link href="{{route('about')}}" title="{{__('home.about.link')}}" aria="Strona o nas" />
                </div>

            </div>


            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 ">
                <div class="space-y-4">
                    <x-title>{{$home->about_heading}}</x-title>

                  
                        <x-text-wrapper class=" lg:mr-10">

                            {!!$home->about_text_first!!}
                        </x-text-wrapper>


                   
                  
                </div>
                <img src="{{asset('storage/' . $home->about_images[0])}}" alt="wnętrze w hotelu Jan w Krakowie"
                    class="aspect-[4/3]  object-cover w-full shadow-md" loading="lazy" width="500" height="500" />
            </div>
        </div>
    </x-container>
</section>