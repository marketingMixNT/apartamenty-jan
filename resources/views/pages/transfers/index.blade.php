<x-layouts.app title="{{$pageTravels->meta_title}}"
    description="{{$pageTravels->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">
    {{-- HEADER --}}
    <x-header title="{{$pageTravels->header_heading}}" subtitle="{{$home->title}}" bgi="{{asset('storage/'. $pageTravels->banner)}}" />


    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl">

            <x-heading-horizontal title="{{$pageTravels->heading}}">
                <x-text-wrapper>{!!$pageTravels->text!!}
                </x-text-wrapper>
            </x-heading-horizontal>

            <div class="space-y-6 pt-10 sm:pt-20">


                <div class="flex justify-center items-center gap-12 md:gap-16 flex-wrap sm:mb-12">


                    <div class="flex flex-col justify-center items-center gap-6 ">
                        <img src="{{asset('storage/' . $pageTravels->travel_image)}}"
                            alt="transfery z Hotel Jan w Krakowie" class="aspect-square object-cover xs:max-w-[350px]">

                        <a href="https://fareharbor.com/embeds/book/gr8way/items/?flow=1022562&asn=janhotel-euro&sheet-uuid=9aefc760-2c62-4be2-b4e5-2c505305b4d3&full-items=yes&ref=Jan"
                            target="_blank" rel="noreferrer nofollow"
                            class="border   px-8 py-2.5 uppercase text-xs duration-300   bg-accent-400  close text-fontWhite hover:text-fontBlack">
                            {{__('transfers.link-travel')}}
                        </a>
                    </div>

                    <div class="flex flex-col justify-center items-center gap-6 ">
                        <img src="{{asset('storage/' . $pageTravels->transfer_image)}}"
                            alt="wycieczki z Hotel Jan w Krakowie" class="aspect-square object-cover xs:max-w-[350px]">

                        <a href="https://fareharbor.com/embeds/book/gr8way/?sheet=157846&asn=janhotel-euro&asn-ref=Jan%20Hotel&full-items=yes&flow=94186"
                            target="_blank" rel="noreferrer nofollow"
                            class="border   px-8 py-2.5 uppercase text-xs duration-300   bg-accent-400  close text-fontWhite hover:text-fontBlack">
                            {{__('transfers.link-transfers')}}
                        </a>
                    </div>








                </div>


                <x-image-text-block img="{{asset('storage/' . $pageTravels->content_image)}}">
                    <div class="space-y-4">

                        <x-text-wrapper>{!!$pageTravels->content_text !!}</x-text-wrapper>
                 
                    </div>
                </x-image-text-block>

            </div>

        </x-container>
    </section>
</x-layouts.app-wrapper>
</x-layouts.app>