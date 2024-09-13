<header
    class="relative flex flex-col justify-center items-center h-[calc(80vh-84px)]  lg:h-[calc(80vh-84px)]  sm:mt-0 w-full bg-cover bg-center bg-fixed bg-gray-500 bg-blend-multiply text-fontLight text-white" style="background-image: url({{$bgi}})"
    >
    <!--HEADING-->
    <span class="mb-4 text-sm 2xl:text-base font-semibold tracking-widest uppercase ">Hotel Jan</span>
    <h1
        class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl 2xl:text-8xl tracking-wider uppercase font-heading font-bold">
        {{$title}}
    </h1>
   
    <x-booking-panel />
    <x-ui.link-button type='primary' class="md:hidden absolute mt-12 bottom-36 left-1/2 transform -translate-x-1/2"
        href="https://booking.com" target="_blank" rel="nofollow" aria-label="Rezerwuj">Rezerwuj</x-ui.link-button>

</header>