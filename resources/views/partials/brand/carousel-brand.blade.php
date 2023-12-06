<div class="owl-carousel owl-two owl-theme">
    @foreach ($brandList as $brand)
        @empty(!$brand->gambar_brand)
            <a href="/brands/{{ $brand->id }}">
                <img class="w-10 rounded-xl" src="{{ asset('storage/images/' . $brand->gambar_brand) }}" alt="">
            </a>
        @endempty
    @endforeach
</div>
