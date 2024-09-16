<section class="pt-20 pb-8">

    <x-container class="max-w-screen-sm space-y-20">


        <div class="swiper testimonial-carousel">
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