<div class="scrollmenu">
    <div class="bg-darkgrey padding-1 margin-1 rad-05">
        <h2>{{ $gallery->name}}</h2>
        <div class="gallery-container">
            <div class="gallery">
                @foreach ($gallery->images as $image)
                    <div class="gallery__item">
                        <img src="{{ $image->url }}" alt="{{ $image->alt_text}}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
