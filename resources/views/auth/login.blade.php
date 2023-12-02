@extends('layouts.main')

@section('container')
    <div class="login flex flex-col justify-center items-center p-16 px-32 mx-auto my-5">
        <h1 class="text-primary text-2xl font-bold mb-6">Masuk</h1>
        <form action="" class="w-full px-64">
            <div class="flex flex-col gap-y-6">
                <input class="bg-bg3 text-text p-4" type="text" autocomplete="off" placeholder="Username" name="username">
                <input class="bg-bg3 text-text p-4" type="password" autocomplete="off" placeholder="Password"
                    name="password">
                <small class="mb-3">Belum memiliki akun? <a href="/auth/register"
                        class="text-primary font-bold">Daftar</a></small>
                <button type="submit"
                    class="w-40 h-14 font-semibold bg-primary rounded-full text-bg3 mx-auto">Masuk</button>
            </div>
        </form>
    </div>
@endsection
