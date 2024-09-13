<x-layouts.app title="Galeria" description="ads">

    {{-- HEADER --}}
    <x-header title="Galeria"
        bgi="https://images.unsplash.com/photo-1582731489225-24fc0a720737?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl">

            {{-- "All" Button --}}
            <button class="bg-black px-12 py-3 ml-12 text-white filter-btn" data-title="">
                All
            </button>

            {{-- Buttons to filter by title --}}
            @foreach ($images as $image)
            <button class="bg-black px-12 py-3 ml-12 text-white filter-btn" data-title="{{ $image->title }}">
                {{ $image->title }}
            </button>
            @endforeach

            {{-- Container for filtered images --}}
            <div class="grid grid-cols-4 gap-12" id="image-gallery">
                @foreach ($images as $image)
                @foreach ($image->images as $img)
                <div class="w-full h-full object-cover image-item" data-title="{{ $image->title }}">
                    <img src="{{ $img }}" alt="{{ $image->title }}" loading="lazy" width="395" height="450"
                    class="w-full h-[450px] object-cover group-hover:scale-110 duration-300 transition-all">
                </div>
                @endforeach
                @endforeach
            </div>
        </x-container>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Select all buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            // Select all images
            const imageItems = document.querySelectorAll('.image-item');
    
            // Add click event to each button
            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const title = this.getAttribute('data-title');
    
                    // Remove 'bg-red-500' class from all buttons before adding it to the active one
                    filterButtons.forEach(btn => btn.classList.remove('bg-red-500'));
    
                    // Add 'bg-red-500' to the clicked button
                    this.classList.add('bg-red-500');
    
                    // If the "All" button is clicked (empty title), show all images
                    if (title === "") {
                        imageItems.forEach(item => {
                            item.style.display = 'block';
                        });
                    } else {
                        // Hide all images
                        imageItems.forEach(item => {
                            item.style.display = 'none';
                        });
    
                        // Show images that match the clicked title
                        imageItems.forEach(item => {
                            if (item.getAttribute('data-title') === title) {
                                item.style.display = 'block';
                            }
                        });
                    }
                });
            });
        });
    </script>
    
</x-layouts.app>
