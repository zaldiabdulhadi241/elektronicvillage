@extends('layouts.main')

@auth
    @section('topbar')
        @include('partials.topbar')
    @endsection
@endauth

@section('container')
    <div class="profile container px-32 mx-auto my-5">
        <h1 class="text-primary mb-16 text-xl font-bold">Informasi Saya</h1>
        <form class="w-full" method="post">
            @csrf
            @method('put')
            <label for="username" class="block mb-3">Username</label>
            <input disabled class="bg-bg3 text-text p-4 w-full mb-8" type="text" value="{{ Auth::user()->username }}"
                name="username" id="username">

            <label for="email" class="block mb-3">Email</label>
            <input class="bg-bg3 text-text p-4 w-full mb-8" type="text" value="{{ Auth::user()->email }}"
                placeholder="{{ Auth::user()->email }}" name="email" id="email">

            <label for="nama" class="block mb-3">Nama</label>
            <input class="bg-bg3 text-text p-4 w-full mb-8" type="text" value="{{ Auth::user()->nama }}"
                placeholder="{{ Auth::user()->nama }}" name="nama" id="nama">

            <label for="alamat" class="block mb-3">Alamat</label>
            <input class="bg-bg3 text-text p-4 w-full mb-8" type="text"
                placeholder="{{ Auth::user()->alamat ?? 'Masukkan Alamat' }}" name="alamat" id="alamat">

            <label for="tanggal_lahir" class="block mb-3">Tanggal Lahir</label>
            <input class="bg-bg3 text-text p-4 w-full mb-8" value="{{ Auth::user()->tanggal_lahir ?? 'Masukkan Alamat' }}"
                type="date" name="tanggal_lahir" id="tanggal_lahir">

            <label for="telp" class="block mb-3">No Telepon</label>
            <input class="bg-bg3 text-text p-4 w-full mb-8" type="text"
                value="{{ Auth::user()->telp ?? 'Masukkan No.Telepon' }}"
                placeholder="{{ Auth::user()->telp ?? 'Masukkan No.Telepon' }}" name="telp" id="telp">

            <label for="jenis_kelamin" class="block mb-3">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin"
                class="border border-border text-sm rounded-lg block w-full p-2.5 mb-8">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <button type="submit" class="w-40 h-14 font-semibold bg-primary rounded-full text-bg3 mx-auto">Edit
                Profile</button>
        </form>
    </div>
@endsection
