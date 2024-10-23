

@props(['cta'])

<section>
    <div class="relative  flex flex-col justify-center items-center gap-6 w-full sm:min-h-[600px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-500 "
        style="background-image: url('{{ asset('storage/' .$cta->image) }}')">
        {{-- text --}}
        <div class="max-w-screen-xl text-center  space-y-12">

            <h2
                class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight text-fontWhite">
               {{$cta->title}}</h2>
            <x-text class="text-fontWhite ">{{$cta->subtitle}}</h2>
            </x-text>
        </div>
        {{-- btns --}}
        <div class="be-panel  mx-6  lg:px-32 2xl:px-16  bg-white">
        </div>
      

    </div>
</section>