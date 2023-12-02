@extends('layouts.main')

@section('container')
    <div class="register flex flex-col justify-center items-center p-16 px-32 mx-auto my-5">
        <h1 class="text-primary text-2xl font-bold mb-6">Daftar</h1>
        <form action="" class="w-full px-64">
            <div class="flex flex-col gap-y-6">
                <input class="bg-bg3 text-text p-4" type="text" autocomplete="off" placeholder="Email" name="email">
                <input class="bg-bg3 text-text p-4" type="text" autocomplete="off" placeholder="Username"
                    name="username">
                <input class="bg-bg3 text-text p-4" type="password" autocomplete="off" placeholder="Password"
                    name="password">
                <small class="mb-3">Sudah memiliki akun? <a href="/auth/login" class="text-primary font-bold">Masuk
                        Sekarang</a></small>
                <button type="submit"
                    class="w-40 h-14 font-semibold bg-primary rounded-full text-bg3 mx-auto">Daftar</button>
            </div>
        </form>
    </div>
@endsection
