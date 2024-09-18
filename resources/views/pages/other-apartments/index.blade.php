<x-layouts.app title="Pozostałe Obiekty - Hotel Jan"
    description="Odkryj nasze pozostałe obiekty. Komfortowe apartamenty idealne na wypoczynek. Zarezerwuj swój pobyt w dogodnej lokalizacji!">


    {{-- HEADER --}}
    <x-header title="Pozostałe Obiekty" bgi="{{asset('assets/images/pokoje/pokoje-23.webp')}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl space-y-8">

            <x-image-text-block img="{{asset('assets/images/wspolne/wspolne-2.webp')}}">
                <div class="flex flex-col gap-12">
                <div class="space-y-2">

                    <x-title>Apartamenty Jan</x-title>
                    <x-text>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iste maiores itaque possimus veritatis laudantium voluptate laboriosam in impedit deleniti.</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                        Ubocz 3b, 34-500 Zakopane 
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="" class="font-light link-hover--dark">
                        mail@gmail.com
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="" class="font-light link-hover--dark">
                        +48 1234567890
                    </a>
                </div>
            </div>
                <x-ui.link href="/" title="zobacz"/>
            </div>
            </x-image-text-block>

            <x-image-text-block order="lg:order-1" img="{{asset('assets/images/wspolne/wspolne-2.webp')}}">
                <div class="flex flex-col gap-12">

              
                    <div class="space-y-2">

                    <x-title>Willa Jan</x-title>
                    <x-text>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iste maiores itaque possimus veritatis laudantium voluptate laboriosam in impedit deleniti.</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                       Ubocz 8a, 34-500 Zakopane
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="" class="font-light link-hover--dark">
                        mail@gmail.com
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="" class="font-light link-hover--dark">
                        +48 1234567890
                    </a>
                </div>
            </div>
                <x-ui.link href="/" title="zobacz"/>
            </div>
            </x-image-text-block>

            <x-image-text-block img="{{asset('assets/images/wspolne/wspolne-2.webp')}}">
                <div class="flex flex-col gap-12">

              
                    <div class="space-y-2">

                    <x-title>Willa LaBelle</x-title>
                    <x-text>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iste maiores itaque possimus veritatis laudantium voluptate laboriosam in impedit deleniti.</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                       Krupówki 40, 34-500 Zakopane
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="" class="font-light link-hover--dark">
                        mail@gmail.com
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="" class="font-light link-hover--dark">
                        +48 1234567890
                    </a>
                </div>
            </div>
                <x-ui.link href="/" title="zobacz"/>
            </div>
            </x-image-text-block>



        </x-container>
    </section>

</x-layouts.app>