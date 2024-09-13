<!--CONTAINER-->
<section class="pt-24 pb-20">
    <x-container class=" max-w-screen-2xl">
       <x-heading heading="lokalne atrakcje" subheading="Podróż kulinarna, która pozostaje w pamięci" />
        <div class="sm:grid grid-cols-3 gap-20 2xl:gap-32 pt-12 lg:py-20">

            <div class="flex flex-col justify-between items-start">
                <div class="w-full h-[60%] overflow-hidden image-animation">
                    <div class="w-full h-full object-cover ken-burns ">
                        <img src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="danie w restauracji Zajazd Śleboda" class="w-full h-full object-cover shadow-md" loading="lazy" width="420" height="480">
                    </div>
                </div>

                <div
                    class="mt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12 ">
                    <img src="" alt="" class="w-20" loading="lazy">
                   
                    <x-ui.link href="/" title="dowiedz się więcej"/>
                </div>
            </div>



            <div class="flex flex-col justify-between items-start gap-12">

                <div class="flex flex-col justify-between items-start gap-12">
                    <x-title >
                        Nasze dania opowiadają historie</x-title>
                    <x-text>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, velit. Qui provident, eligendi odio, earum alias fuga ratione, voluptates harum atque maiores incidunt magnam numquam ea quaerat dignissimos! Quidem, perferendis.</x-text>

                    {{-- <x-base.link href="{{route('menu')}}">Sprawdź Menu</x-base.link> --}}
                </div>
                <img src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="danie w restauracji Zajazd Śleboda"
                    class="hidden lg:block w-full object-cover shadow-md" loading="lazy" width="430" height="320">
            </div>
            <div class="flex flex-col justify-start">
                <div class="h-[80%] w-full overflow-hidden mt-6 shadow-md">
                    <div class="h-full w-full object-cover ken-burns">
                        <img src="https://images.unsplash.com/photo-1477120128765-a0528148fed2?q=80&w=4471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="danie w restauracji Zajazd Śleboda" class="h-full w-full object-cover" loading="lazy" width="766" height="957">
                    </div>
                </div>
            </div>


        </div>
    </x-container>
</section>