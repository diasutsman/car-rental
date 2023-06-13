<!DOCTYPE html>
<html lang="en">

<head>

    <title>Car Rental Website</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    @vite(['resources/css/bootstrap.min.css', 'resources/css/font-awesome.min.css', 'resources/css/owl.carousel.css', 'resources/css/owl.theme.default.min.css', 'resources/css/style.css'])
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    @include('components.loader')

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <!-- SCRIPTS -->
    @livewireScripts
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite(['resources/js/jquery.js', 'resources/js/bootstrap.min.js', 'resources/js/owl.carousel.min.js', 'resources/js/smoothscroll.js', 'resources/js/custom.js', 'resources/js/app.js'])

</body>

</html>
