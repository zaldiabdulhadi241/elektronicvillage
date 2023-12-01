<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ElektronicVillage - Title</title>

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


</head>

<body class="font-hanken">
    @yield('topbar')
    @include('partials.navbar')
    @yield('container')
    </div>
    @include('partials.footer')


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


</body>

</html>
