<section class="py-16 bg-bgSecondary">
    <x-container class="max-w-screen-xl">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-16 md:w-[75%] lg:w-full mx-auto">

            @foreach ($features as $feature)

            <x-feature-card title="{{$feature->title}}" text="{{$feature->description}}">
                <img src="{{'storage/'.$feature->icon}}" alt="{{$feature->title}}" class="w-12 text-accent-400">
            </x-feature-card>

            @endforeach


        </div>
    </x-container>
</section>