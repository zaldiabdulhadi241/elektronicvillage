@extends('admin.partials.sidebar')

@section('dashboard.content')
    <div class="container">
        <h1 class="fs-2">Data Brand</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar Brand</th>
                    <th>Nama Brand</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $index => $brand)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><img src="{{ asset('storage/images/' . $brand->foto_brand) }}" alt="{{ $brand->nama_brand }}">
                        </td>
                        <td>{{ $brand->nama_brand }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="/admin/brand/edit/{{ $brand->id }}" class="btn btn-warning text-white ">Edit</a>
                                <form action="/admin/brand/{{ $brand->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="confirm('Ingin Menghapus Brand?')"
                                        class="btn btn-danger text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
