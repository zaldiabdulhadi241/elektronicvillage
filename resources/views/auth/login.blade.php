@extends('layouts.main')

@section('container')
    @if (session()->has('loginError'))
        <div class="bg-error text-bg3 w-80 mt-10 rounded-lg p-4 mx-auto">
            {{ session('loginError') }}
        </div>
    @endif
    <div class="login flex flex-col justify-center items-center p-16 px-32 mx-auto my-5">
        <h1 class="text-primary text-2xl font-bold mb-6">Masuk</h1>
        <form method="POST" class="w-full px-64">
            @csrf
            <div class="flex flex-col gap-y-6">
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
                <small class="mb-3">Belum memiliki akun? <a href="/auth/register"
                        class="text-primary font-bold">Daftar</a></small>
                <button type="submit"
                    class="w-40 h-14 font-semibold bg-primary rounded-full text-bg3 mx-auto">Masuk</button>
            </div>
        </form>
    </div>
@endsection
