@props(['img','order'=>''])

<div class="flex flex-col lg:flex-row  gap-12 max-w-screen-lg mx-auto justify-center items-center pt-12">
    <div class="lg:w-1/2 {{$order}}">

        <img src="{{$img}}" alt="" class=" aspect-square object-cover shadow-md ">
    </div>
    <div class="lg:w-1/2">
        {{$slot}}
    </div>

</div>