@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/megamenu.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/stylesheet.css') }}">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/megamenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stylesheet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}" media="all">
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- Header Here --}}
    @livewire('components.header')

    <div class="site-main ttm-bgcolor-primary">
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    </div>

    @include('livewire.components.footer')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</x-filament-fabricator::layouts.base>