@props(['subheading', 'heading'])

<div class="flex flex-col max-w-screen-lg mx-auto">

    <h2
        class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl 2xl:text-8xl tracking-wider font-heading font-medium">
        {{$heading}}</h2>
    <span class="font-handwriting text-right text-2xl mt-2 ">{{$subheading}}</span>
</div>