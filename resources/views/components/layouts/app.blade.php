@props(['title', 'description', 'noFollow' => false])

<!DOCTYPE html>
<html lang="pl" class="scroll-smooth scroll-pt-32">

<head>
    @include('partials.meta')
    @include('partials.fonts')
    {{-- @include('partials.favicon') --}}

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>

{{--

<body class="p-3 bg-primary-800 font-text text-fontPrimary overflow-x-hidden "> --}}

    <body class="overflow-x-hidden font-text">

<x-preloader />
        <x-nav.navbar />
        <x-nav.menu />


        {{ $slot }}

        <x-map/>
        <x-footer /> 

        <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script>
    </body>

</html>