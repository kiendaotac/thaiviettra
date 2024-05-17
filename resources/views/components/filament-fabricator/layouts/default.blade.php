@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Trà Thái Việt">
    <meta name="description" content="Trà Thái Việt, tinh hoa trà Việt">
    <meta name="keywords" content="trà, thái việt, trà xanh, trà cụ, trà đinh, trà nõn">
    <meta name="language" content="Vietnamese">
    @php
        $productImage = !empty($product) ? $product->getMedia('product-images')->first()->getUrl() : asset('assets/image/logo.png');
        $description = empty($product) ? 'Trà Thái Việt, tinh hoa trà Việt' : $product->description;
    @endphp
    <meta property="og:image" content="{{ $productImage }}" />
    <meta property="og:image:secure_url" content="{{ $productImage }}" />
    <meta property="og:image:height" content="256" />
    <meta property="og:image:width" content="256" />
    <meta property="og:image:alt" content="{{ $description }}" />
    <meta property="og:image:type" content="image/jpg" />
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