<x-layouts.app title="{{$rooms->meta_title}}"
    description="{{$rooms->meta_desc}}">

<x-layouts.app-wrapper :home="$home">
    {{-- HEADER --}}
    <x-header title="{{$rooms->header_heading}}" subtitle="{{$home->title}}" bgi="{{asset('storage/'. $rooms->banner)}}" />

    {{-- MAIN --}}
    <section class="py-10 lg:py-20">
        <x-container class="max-w-screen-2xl">
            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="{{$rooms->heading}}">
                    <x-text-wrapper>{!!$rooms->text!!}</x-text-wrapper>
                </x-heading-horizontal>
            </div>

            @foreach ($apartments as $apartment)
            <x-apartment-card-horizontal :apartment='$apartment' />
            @endforeach

        </x-container>
    </section>

</x-layouts.app-wrapper>

</x-layouts.app>