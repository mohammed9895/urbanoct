<div>
    <x-partials.title :title="$title"/>
    <section class="container mx-auto mt-20 px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($feeds as $feed)
                <div>
                    <img src="storage/{{ $feed->image }}" alt="">
                </div>
            @endforeach
        </div>
    </section>
</div>
