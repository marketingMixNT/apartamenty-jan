@props(["href","title"])

<div class="flex justify-start items-center gap-1 group ">

    <a href="{{$href}}" {{$attributes}} class="link-hover--accent font-light text-accent-400">{{$title}}</a>
    <x-lucide-arrow-right class="w-3 group-hover:translate-x-3 duration-300 text-accent-400" />
</div>