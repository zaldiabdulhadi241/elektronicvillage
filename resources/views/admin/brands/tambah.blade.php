@extends('admin.partials.sidebar')

@section('dashboard.content')
    <div class="container">
        <h1 class="fs-2 mb-4">Tambah Brand</h1>
        <form method="POST" action="/admin/brands/" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_brand" class="form-label">Nama Brand</label>
                <input type="text" class="form-control" id="nama_brand" name="nama_brand">
            </div>
            <div class="mb-3">
                <label for="gambar_brand" class="form-label">Gambar Brand</label>
                <input type="file" class="form-control" id="gambar_brand" name="gambar_brand">
            </div>

            <button type="submit" class="btn btn-primary">Tambah Brand</button>
        </form>
    </div>
@endsection
