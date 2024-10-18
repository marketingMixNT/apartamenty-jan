<x-layouts.app title="{{$about->meta_title}}" description="{{$about->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">


        {{-- HEADER --}}
        <x-header title="{{$about->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $about->banner)}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-2xl">

                <x-heading heading="{{$about->heading}}" />

                <div class="space-y-6 pt-12">




                    @foreach ($about->pageAboutBlocks as $block )
                    <x-image-text-block img="{{ asset('storage/' . $block->image) }}"
                        :order="$loop->iteration % 2 == 0 ? 'lg:order-1' : null">
                        <x-text-wrapper>{!! $block->text !!}</x-text-wrapper>
                    </x-image-text-block>
                    @endforeach








                </div>
            </x-container>
        </section>
    </x-layouts.app-wrapper>
</x-layouts.app>