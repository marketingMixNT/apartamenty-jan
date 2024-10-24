<section class="pt-20 pb-8 ">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        <x-heading-horizontal title="{{$home->testimonials_heading}}">
            <x-text-wrapper>{!!$home->testimonials_text!!}</x-text-wrapper>
           
          
            @if(!is_null($home->google_reviews) )
            <x-rating 
                source="google" 
                rate="{{ $home->google_reviews_average }}" 
                href="{{ $home->reviews_links  }}" 
                reviews="{{ $home->google_reviews }} {{ __('home.testimonials.reviews') }}" 
            />
        @endif

        @if(!is_null($home->tripadvisor_reviews) )
        <x-rating source="tripAdvisor" rate="{{$home->tripadvisor_reviews_average}}" href="{{$home->tripadvisor_links}}" reviews="{{$home->tripadvisor_reviews}} {{__('home.testimonials.reviews')}}" />
    @endif
                
          

        </x-heading-horizontal>


        <div class="swiper testimonial-carousel max-w-screen-md">
            <div class="swiper-wrapper ">
                @foreach ($testimonials as $testimonial)
                <x-testimonial-card :testimonial="$testimonial" />
                @endforeach

            </div>


        </div>
    </x-container>
</section>










{{-- <section class="section px-6 md:px-12">
    <div class="max-w-screen-lg mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

    </div>

</section> --}}