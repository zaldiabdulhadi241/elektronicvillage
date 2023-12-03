<div class="flex flex-row flex-wrap gap-x-4 justify-between">
    @foreach ($kategoriList as $kategori)
        <a href="/kategori/{{ Str::slug($kategori->nama_kategori) }}" class="flex flex-col justify-center items-center">
            <div class="w-36 h-36 flex flex-col justify-center items-center bg-bg1 mb-5 rounded-full shadow-md m-auto">
                <img class="object-contain w-[115px] h-[115px]"
                    src="{{ asset('storage/images/' . $kategori->gambar_kategori) }}"
                    alt="{{ $kategori->nama_kategori }}">
            </div>
            <h3 class="font-lg font-medium text-lg">{{ $kategori->nama_kategori }}</h3>
        </a>
    @endforeach
</div>
