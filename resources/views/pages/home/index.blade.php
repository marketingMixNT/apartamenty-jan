<x-layouts.app title="{{$home->meta_title}}" description="{{$home->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">

        @include('pages.home.partials.header')

        <div class="be-panel  md:hidden md:mx-6  lg:mx-32 2xl:mx-0 pt-12">
        </div>

        @include('pages.home.partials.about')

        @include('pages.home.partials.features')

        @include('pages.home.partials.apartments')


        <x-cta :cta="$cta" />

        @include('pages.home.partials.testimonials')
        @include('pages.home.partials.local-attractions')
    </x-layouts.app-wrapper>
</x-layouts.app>