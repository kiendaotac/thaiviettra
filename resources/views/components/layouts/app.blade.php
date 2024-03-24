 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trà Thái Việt</title>

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
    <link rel="shortcut icon" href="{{ asset('assets/image/logo.png') }}">
    <meta name="description" content="Trà Thái Việt">
</head>

<body>
<div class="page">
    @livewire('components.header')
    <!--header end-->
    {{ $slot }}
    <footer class="footer widget-footer clearfix">
        <div class="second-footer ttm-bgimage-yes bg-footer ttm-bg ">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area" id="opening_hours">
                        <div class="widget-latest-tweets res-991-margin_top0 clearfix" id="opening_hours_data">
                            <div class="widgte-text">
                                <div class="widgte-text footer_opening_hours"></div>
                                <div class="widgte-title">
                                    <h4>Thông tin</h4>
                                </div>
                                <div class="information-footer">
                                    <p>Email: <a href="mailto:contact@yourdomain.com">contact@yourdomain.com</a>
                                    </p>
                                    <p>Địa chỉ: <a href="javascript:avoid(0)">A12,
                                            Đinh Tiên Hoàng</a><a></a></p><a>
                                    </a>
                                    <p><a>Điện thoại: </a><a href="tel:0123 456 789">0123 456 789</a>
                                    </p>
                                </div>
                                <!-- <div class="widgte-title">
                                <h4>Về chúng tôi</h4>
                            </div>
                            <div>
                                <p>BuildTab được thành lập vào năm 1984, là công
                                    ty tư vấn và cơ sở hạ tầng đáng tin cậy nhất
                                    trên toàn thế giới.<br></p>
                            </div> -->
                                <div class="widget_social padding_top10 clearfix">
                                    <div class="social-icons">
                                        <ul class="social-icons list-inline">
                                            <li>
                                                <a class="tooltip-top" target="_blank"
                                                   href="https://www.facebook.com/facebook" rel="noopener"
                                                   aria-label="facebook" data-tooltip="Facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="tooltip-top" target="_blank" href="https://twitter.com/"
                                                   rel="noopener" aria-label="Twitter" data-tooltip="Twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="tooltip-top" target="_blank"
                                                   href="https://www.instagram.com/" rel="noopener"
                                                   aria-label="instagram" data-tooltip="instagram">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="tooltip-top" target="_blank"
                                                   href="https://www.youtube.com/" rel="noopener"
                                                   aria-label="Youtube" data-tooltip="Youtube">
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">

                        <div class="widget widget_nav_menu clearfix">

                            <h3 class="widget-title">Thông tin </h3>

                            <ul id="menu-footer-quick-links">
                                <li>
                                    <a href="https://buildtab.exdomain.net/ve-chung-toi">
                                        <i class="fa fa-arrow-right"></i> Về chúng
                                        tôi</a>
                                </li>
                                <li>
                                    <a href="https://buildtab.exdomain.net/du-an">
                                        <i class="fa fa-arrow-right"></i>Dự án</a>
                                </li>
                                <li>
                                    <a href="https://buildtab.exdomain.net/lien-he">
                                        <i class="fa fa-arrow-right"></i> Liên hệ
                                    </a>
                                </li>
                                <li>
                                    <a href="https://buildtab.exdomain.net/dich-vu">
                                        <i class="fa fa-arrow-right"></i>Dịch vụ</a>
                                </li>
                                <li>
                                    <a href="https://buildtab.exdomain.net/tin-tuc">
                                        <i class="fa fa-arrow-right"></i>Tin tức</a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area" id="news_footer_custom">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Facebook</h3>
                            <div class="footer-tags mt-25">
                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/facebook"
                                     data-tabs="none" data-small-header="false" data-adapt-container-width="true"
                                     data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered"
                                     fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=633874986796358&amp;container_width=370&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=none">
										<span style="vertical-align: bottom; width: 340px; height: 130px;"><iframe
                                                    name="f409138c8121e298f" width="1000px" height="1000px"
                                                    data-testid="fb:page Facebook Social Plugin"
                                                    title="fb:page Facebook Social Plugin" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                    allow="encrypted-media" src="./BuildTab Bussiness_files/page.html"
                                                    style="border: none; visibility: visible; width: 340px; height: 130px;"
                                                    class=""></iframe></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-bg copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-left">
									<span class="cpy-text">© Copyright 2022-2024
										BuildTab Bussiness.
									</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
