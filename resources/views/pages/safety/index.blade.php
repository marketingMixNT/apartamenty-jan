<x-layouts.app title="{{$pageSafety->meta_title}}"
    description="{{$pageSafety->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">

        <x-header title="{{$pageSafety->header_heading}}" subtitle="{{$home->title}}" bgi="{{asset('storage/'. $pageSafety->banner)}}" />


    <section class="py-20">
        <x-container class="max-w-screen-2xl">

            <div class="flex flex-col justify-center items-center gap-6  text-center">
                <x-title>{{$pageSafety->heading}}</x-title>
                <x-text>{!!$pageSafety->text!!}</x-text>

                <div class="grid xs:grid-cols-2 lg:grid-cols-3 gap-12 xs:gap-20 pt-12">

                    @foreach ($pictograms as $pictogram)
                        <x-security-box icon="{{asset('storage/'. $pictogram->image)}}" text="{{$pictogram->text}}" />
                        
                    @endforeach

                   

                </div>
            </div>



        </x-container>
    </section>
</x-layouts.app-wrapper>
</x-layouts.app>