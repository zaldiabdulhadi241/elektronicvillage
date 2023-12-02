@extends('layouts.main')

@section('container')
    <div class="register flex flex-col justify-center items-center p-10 px-32 mx-auto">
        <h1 class="text-primary my-5 text-2xl font-bold mb-6">Daftar</h1>
        <form method="POST" class="w-full px-64">
            @csrf
            <div class="flex flex-col gap-y-6">
                <input required value="{{ old('nama') }}"
                    class="bg-bg3 text-text p-4 @error('nama')
                    border border-error
                @enderror"
                    type="text" autocomplete="off" placeholder="Nama Lengkap" name="nama">
                @error('nama')
                    <small class="text-error">{{ $message }}</small>
                @enderror
                <input required value="{{ old('email') }}"
                    class="bg-bg3 text-text p-4 @error('email')
                border border-error
            @enderror"
                    type="email" autocomplete="off" placeholder="Email" name="email">
                @error('email')
                    <small class="text-error">{{ $message }}</small>
                @enderror
                <input required value="{{ old('username') }}"
                    class="bg-bg3 text-text p-4 @error('username')
                border border-error
            @enderror"
                    type="text" autocomplete="off" placeholder="Username" name="username">
                @error('username')
                    <small class="text-error">{{ $message }}</small>
                @enderror
                <input required
                    class="bg-bg3 text-text p-4 @error('password')
                border border-error
            @enderror"
                    type="password" autocomplete="off" placeholder="Password" name="password">
                @error('password')
                    <small class="text-error">{{ $message }}</small>
                @enderror
                <small class="mb-3">Sudah memiliki akun? <a href="/auth/login" class="text-primary font-bold">Masuk
                        Sekarang</a></small>
                <button type="submit"
                    class="w-40 h-14 font-semibold bg-primary rounded-full text-bg3 mx-auto">Daftar</button>
            </div>
        </form>
    </div>
@endsection
