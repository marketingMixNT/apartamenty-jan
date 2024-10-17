<x-layouts.app title="{{$home->meta_title}}" description="{{$home->meta_desc}}">

    @include('pages.home.partials.header')
    @include('pages.home.partials.about')

    @include('pages.home.partials.features')

    @include('pages.home.partials.apartments')


<x-cta :cta="$cta" />

    @include('pages.home.partials.testimonials')
    @include('pages.home.partials.local-attractions')
</x-layouts.app>
{{-- <x-layouts.app title="{{__('home.meta-title')}}" description="{{__('home.meta-desc')}}">

    @include('pages.home.partials.header')
    @include('pages.home.partials.about')

    @include('pages.home.partials.features')

    @include('pages.home.partials.apartments')


<x-cta :cta="$cta" />

    @include('pages.home.partials.testimonials')
    @include('pages.home.partials.local-attractions')
</x-layouts.app> --}}