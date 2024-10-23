@props(['object','title'])

<x-image-text-block img="{{asset('storage/' . $object->thumbnail)}}" alt="zdjęcie przedstawiające {{$object->title}} ">
    <div class="flex flex-col gap-12">
        <div class="space-y-2">

            <x-title>{{$object->title}}</x-title>
            <x-text-wrapper>{!!$object->description!!}</x-text-wrapper>
        </div>

        <div class="space-y-4">


            <div class="flex justify-start items-center gap-3">
                <x-lucide-map-pin class="size-6 text-accent-400" />
                <p class="font-light ">
                    {{$object->address}}
                </p>
            </div>
            <div class="flex justify-start items-center gap-3">
                <x-lucide-mail class="size-6 text-accent-400" />
                <a href="mailto:{{$object->mail}}" class="font-light link-hover--dark">
                    {{$object->mail}}
                </a>
            </div>
            <div class="flex justify-start items-center gap-3">
                <x-lucide-phone class="size-6 text-accent-400" />
                <a href="tel:+48{{$object->phone}}" class="font-light link-hover--dark">
                    +48 {{$object->phone}}
                </a>
            </div>
        </div>
        <x-ui.link href="{{$object->link}}" target="_blank" rel="noreferrer nofollow"
            title="{{__('other-objects.check')}}" />
    </div>
</x-image-text-block>