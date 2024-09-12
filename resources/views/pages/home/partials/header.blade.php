<div class="swiper hero-carousel relative w-full h-screen bg-gray-500 ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}
        <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-5xl md:text-8xl 2xl:text-9xl  font-semibold  font-heading  text-fontWhite  tracking-wide z-50"
            style="line-height: .6">
            Hotel Jan <br> <span class=" text-xl sm:text-2xl font-handwritting">Hotel inny niż
                wszystkie!</span>
        </h1>

        {{-- SLIDES --}}
        @foreach ($slides as $slide)

      
        {
        <div class="swiper-slide relative w-full h-full ">

            <img src="{{ $slide->image}}" alt="{{$slide->title}}" class="absolute inset-0 w-full h-full object-cover" />
            {{-- <img src="{{ asset('/storage/' . $slide['image']) }}" alt="{{ $slide['alt'] }}" width="1920"
                height="1080" class="absolute inset-0 w-full h-full object-cover" /> --}}

            <div class="absolute inset-0 bg-black opacity-30"></div>
        </div>
        }
        @endforeach


        {{-- RESERVATION PANEL --}}
        
        <x-booking-panel />
        <x-ui.link-button type='primary' class="md:hidden absolute mt-12 bottom-36 left-1/2 transform -translate-x-1/2"
            href="https://booking.com" target="_blank" rel="nofollow" aria-label="Rezerwuj">Rezerwuj</x-ui.link-button>

        {{-- ANCHOR --}}
        <a href="#o-nas" class="absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50">
         
                <x-lucide-arrow-down-circle class="animate-pulse w-8 md:w-12 text-white" />


        </a>
    </div>
</div>