<x-layouts.app title="{{$pageAttraction->meta_title}}"
    description="{{$pageAttraction->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">
    {{-- HEADER --}}
    <x-header title="{{$pageAttraction->header_heading}}" subtitle="{{$home->title}}" bgi="{{asset('storage/'. $pageAttraction->banner)}}" />

    <x-container class="max-w-screen-xl pt-20 pb-28">
        <x-heading-horizontal title="{{$pageAttraction->heading}}">
            <x-text-wrapper>{!!$pageAttraction->text!!}
            </x-text-wrapper>
        </x-heading-horizontal>

        


        <section class="flex flex-col gap-20 lg:gap-40 pt-32">

            @foreach ($attractions as $attraction)
            <div class="grid lg:grid-cols-2 gap-12">



                <div class=" relative  flex flex-col gap-6 justify-center  lg:text-left">
                    <x-title>{{ $attraction['title'] }}</x-title>
                    <div class="leading-loose font-light">{!! $attraction['description'] !!}</div>

                </div>
                @foreach ($attraction['images'] as $img)
                <div class="   mx-auto overflow-hidden flex justify-center items-center">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src=" {{ asset('/storage/' . $img) }}" alt="{{ $attraction['title'] }}" loading="lazy"
                            class="w-full  object-cover shadow-md  aspect-square max-w-[550px]"></a>
                </div>
                @endforeach
            </div>
            @endforeach
        </section>


    </x-container>
</x-layouts.app-wrapper>
</x-layouts.app>