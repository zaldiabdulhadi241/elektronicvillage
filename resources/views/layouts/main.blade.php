<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>ElektronicVillage</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.1/sweetalert2.min.css"
        integrity="sha512-l1vPIxNzx1pUOKdZEe4kEnWCBzFVVYX5QziGS7zRZE4Gi5ykXrfvUgnSBttDbs0kXe2L06m9+51eadS+Bg6a+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body class="font-hanken">
    @yield('topbar')
    @include('partials.navbar')
    @yield('container')
    </div>
    @include('partials.footer')


    {{-- Sweet Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.1/sweetalert2.min.js"
        integrity="sha512-lhtxV2wFeGInLAF3yN3WN/2wobmk+HuoWjyr3xgft42IY0xv4YN7Ao8VnYOwEjJH1F7I+fadwFQkVcZ6ege6kA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        import Swal from 'sweetalert2';
    </script>

    {{-- Jquery --}}
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    {{-- Owl Carousel --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('.owl-one').owlCarousel({
                items: 1,
                margin: 10,
                autoHeight: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
            });

            $('.owl-two').owlCarousel({
                items: 3,
                margin: 10,
                dots: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
            });
        });
    </script>

    @if (session()->has('success-delete-cart'))
        <script>
            Swal.fire({
                title: "Success",
                text: "Produk telah dihapus dari Keranjang",
                icon: "success"
            });
        </script>
    @endif

    @if (session()->has('success-add-cart'))
        <script>
            Swal.fire({
                title: "Success",
                text: "Berhasil Menambahkan Produk ke Keranjang",
                icon: "success"
            });
        </script>
    @endif

    @if (session()->has('success-payment'))
        <script>
            Swal.fire({
                title: "Success",
                text: "Pembayaran Berhasil",
                icon: "success"
            });
        </script>
    @endif

    @yield('scripts')


</body>

</html>
