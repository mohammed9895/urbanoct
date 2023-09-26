<div>
    <div class="owl-carousel owl-theme">
        @foreach($sliders as $slider)
            <div class="aspect-video scale-95">
                <img src="storage/{{ $slider->image  }}" class="rounded-lg" alt="">
            </div>
        @endforeach
    </div>
</div>
