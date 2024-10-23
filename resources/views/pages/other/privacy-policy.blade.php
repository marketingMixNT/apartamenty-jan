<x-layouts.app title="{{__('privacy-policy.meta_title')}}" description="{{__('privacy-policy.meta_desc')}}">

    <x-layouts.app-wrapper :home="$home">
        {{-- HEADER --}}
        <x-header title="{{__('privacy-policy.header-heading')}}" subtitle="{{$home->title}}"
        bgi="{{asset('storage/'. $privacyPolicy->banner)}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-lg prose">
                {!! $privacyPolicy->content !!}





            </x-container>
        </section>


    </x-layouts.app-wrapper>
</x-layouts.app>