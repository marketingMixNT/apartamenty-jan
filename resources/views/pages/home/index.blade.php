<x-layouts.app title="{{__('home.meta-title')}}" description="{{__('home.meta-desc')}}">

    @include('pages.home.partials.header')
    @include('pages.home.partials.about')
    @include('pages.home.partials.features')
    @include('pages.home.partials.apartments')
    @include('pages.home.partials.cta')
    @include('pages.home.partials.testimonials')
    @include('pages.home.partials.local-attractions')
</x-layouts.app>