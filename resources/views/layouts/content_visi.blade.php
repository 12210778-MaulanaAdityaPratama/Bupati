<div class="slideshow-container">

    <!-- Full-width images -->
    @foreach ($slider as $s )


    <div class="mySlides fade">
        <img src="{{ asset('storage/slider-images/' . $s->gambar) }}" >
    </div>
    @endforeach

    {{-- <div class="mySlides fade">
        <img src="{{ asset('img/banner2.png') }}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="{{ asset('img/banner3.png') }}" style="width:100%">
    </div> --}}

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
