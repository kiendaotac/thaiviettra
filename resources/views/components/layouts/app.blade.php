 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trà Thái Việt</title>
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
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/flatsome-shop.css') }}">
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
    <link rel="shortcut icon" href="{{ asset('assets/image/logo.png') }}">
    <meta name="description" content="Trà Thái Việt">
</head>

<body>
<div class="page">
    @livewire('components.header')
    <!--header end-->
    {{ $slot }}
    @include('livewire.components.footer')
</div>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    document.addEventListener('orderSuccess', function (data) {
        Swal.fire({
            title: "Thêm sản phẩm thành công",
            text: "",
            icon: "success",
            confirmButtonColor: "#0E8342",
        });
    })
    document.addEventListener('checkoutComplete', function (data) {
        Swal.fire({
            title: "Đặt hàng thành công",
            text: "",
            icon: "success",
            confirmButtonColor: "#0E8342",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '{{ route('home') }}'
            }
        });
    })
</script>
</body>
</html>
