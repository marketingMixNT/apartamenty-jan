<x-layouts.app title="{{$pageContact->meta_title}}"
    description="{{$pageContact->meta_desc}}">

    <x-layouts.app-wrapper :home="$home">

    {{-- HEADER --}}
    <x-header title="{{$pageContact->header_heading}}" subtitle="{{$home->title}}" bgi="{{asset('storage/'. $pageContact->banner)}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading  heading="{{__('contact.heading')}}" />
        <!--CONTENT-->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

            <div class="order-1 lg:order-none">
                <x-title>{{$home->title}}</x-title>
                <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
            
                    <x-contact-box title="E-mail">
                        <a class="link-hover--dark text-xl font-light" href="mailto:{{$home->mail}}">{{$home->mail}}</a>
                    </x-contact-box>
            
                    <x-contact-box title="{{__('contact.phone')}}">
                        <a class="link-hover--dark text-xl font-light mb-2" href="tel:+48 {{$home->phone}}">+48 {{$home->phone}}</a>
                        <a class="link-hover--dark text-xl font-light" href="tel:+48{{$home->phone_second}}">+48 {{$home->phone_second}}</a>
                    </x-contact-box>
            
                    <x-contact-box title="{{__('contact.address')}}">
                        <a class="link-hover--dark text-xl font-light" href="{{$home->map_link}}">{{$home->address}}<br>{{$home->city}}</a>
                    </x-contact-box>
            
                    <x-contact-box title="Social Media">
                        <div class="flex justify-start  items-center gap-3">
                        @foreach ($home->socials as $social )
                   <x-socials :social="$social" dark />
                   @endforeach
                        </div>

                      
                    </x-contact-box>
            
                </div>
                <div class="flex flex-col gap-2">

                    <h3 class="text-lg font-light uppercase">{{__('contact.reception')}}</h3>
                    <h3 class="text-lg font-light uppercase">{{__('contact.bank-account')}}</h3>
                    <span class="font-light">bank: {{$home->bank}}</span>
                    <span class="font-light">{{__('contact.bank-account-number')}}: {{$home->bank_account}}</span>
                    <span class="font-light">SWIFT: BREX PL PW MBK</span>
                </div>
                
            </div>

            

            <livewire:contact-form/>

</section>

        </x-container>
    </x-layouts.app-wrapper>
</x-layouts.app>
