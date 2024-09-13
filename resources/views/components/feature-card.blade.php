<div class="flex flex-col justify-center items-center gap-4 text-center">
    {{$slot}}
    <div class="space-y-2">
        <h2 class="text-lg font-semibold">{{$title}}</h2>
        <x-text>{{$text}}</x-text>
    </div>
</div>