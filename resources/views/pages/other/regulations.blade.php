<x-layouts.app title="{{__('regulations.meta_title')}}"
    description="{{__('regulations.meta_desc')}}">

    <x-layouts.app-wrapper :home="$home">
    {{-- HEADER --}}
    <x-header title="{{__('regulations.header-heading')}}" subtitle="{{$home->title}}  bgi="{{asset('storage/'. $regulations->banner)}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-lg prose">
             {!! $regulations->content !!}





        </x-container>
    </section>


</x-layouts.app-wrapper>
</x-layouts.app>