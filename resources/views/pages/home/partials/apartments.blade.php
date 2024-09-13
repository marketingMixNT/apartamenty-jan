

<section class="pt-8 pb-24">
    <x-container class="max-w-screen-2xl 2xl:px-12">

        <x-heading heading="Prawdziwy Krakowski Urok" subheading="Lorem ipsum dolor sit amet" />

        <div class="flex flex-col pt-12 ">

            @foreach ($apartments as $apartment)

            <x-apartment-card :apartment="$apartment" />

            @endforeach

        </div>

    </x-container>
</section>