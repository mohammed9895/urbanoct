<div>
    <div class="owl-carousel owl-theme">
        @foreach($key_notes as $key_note)
            <div class="aspect-video scale-95">
                <img src="storage/{{ $key_note->image  }}" class="rounded-lg" alt="{{ $key_note->caption }}">
                <h1 class="font-bold text-2xl mt-5 text-left rtl:text-right">{{ $key_note->caption }}</h1>
            </div>
        @endforeach
    </div>
</div>
