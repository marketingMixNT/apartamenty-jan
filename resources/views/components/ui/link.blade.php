@props(["href","title"])

<div class="flex justify-center items-center gap-1 group ">

    <a href="{{$href}}" {{$attributes}} class="link-hover--dark">{{$title}}</a>
    <x-lucide-arrow-right class="w-3 group-hover:translate-x-3 duration-300" />
</div>