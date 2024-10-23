<x-layouts.app title="{{$pageOtherObjects->meta_title}}" description="{{$pageOtherObjects->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">

    {{-- HEADER --}}
    <x-header title="{{$pageOtherObjects->header_heading}}" subtitle="{{$home->title}}"
        bgi="{{asset('storage/'. $pageOtherObjects->banner)}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl space-y-8">

            @if($pageOtherObjects->heading && $pageOtherObjects->text)
            <x-heading-horizontal title="{{$pageOtherObjects->heading}}" class="pb-32">
                <x-text-wrapper>{!!$pageOtherObjects->text!!}
                </x-text-wrapper>
            </x-heading-horizontal>
            @endif


@foreach ($otherObjects as $object)
<x-other-object-block :object="$object" :title="$home->title"/>
    
@endforeach

            {{-- <x-image-text-block img="{{asset('assets/images/pozostale/apartamenty-jan.webp')}}" alt="zdjęcie przedstawiające Apartamenty Jan w Zakopanem">
                <div class="flex flex-col gap-12">
                <div class="space-y-2">

                    <x-title>Apartamenty Jan</x-title>
                    <x-text>{{__('other-objects.apartamenty-jan-text')}}</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                        Ubocz 3b, 34-500 Zakopane 
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="mailto:biuro@apartamenty-jan.com.pl" class="font-light link-hover--dark">
                        biuro@apartamenty-jan.com.pl
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="tel:+48182014207" class="font-light link-hover--dark">
                        +48 18 201-42-07
                    </a>
                </div>
            </div>
                <x-ui.link href="https://apartamentyjan.com.pl" target="_blank" rel="noreferrer nofollow" title="{{__('other-objects.check')}}"/>
            </div>
            </x-image-text-block> --}}





            



        </x-container>
    </section>
</x-layouts.app-wrapper>
</x-layouts.app>