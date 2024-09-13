@props(['apartment'])

<div class="group ">

    <img src="{{ $apartment->thumbnail }}" alt="{{ $apartment->title }}" loading="lazy" width="395" height="450"
        class="h-[450px] object-cover w-full group-hover:scale-110 duration-300">

    <div class="bg-white group-hover:-translate-y-12 duration-300 ease border border-transparent group-hover:border group-hover:border-gray-200  py-8 flex flex-col justify-center items-center gap-4">

        
        
          
            {{-- <x-base.heading_small>{{$apartment->title }}</x-base.heading_small> --}}

        <h3 class="text-2xl text-center px-2">{{ $apartment->title  }}</h3>

        <span
            class="opacity-0 group-hover:opacity-100 duration-300 text-sm text-primary-400 font-AktivGrotesk px-4 md:px-32 lg:px-4 text-center">{{$slot}}</span>
    </div>

</div>