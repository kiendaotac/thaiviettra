<footer class="footer widget-footer clearfix">
    <div class="second-footer ttm-bgimage-yes bg-footer ttm-bg ">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area" id="opening_hours">
                    <div class="widget-latest-tweets res-991-margin_top0 clearfix" id="opening_hours_data">
                        <div class="widgte-text">
                            <div class="widgte-text footer_opening_hours"></div>
                            <div class="footer-logo">
                                <img id="logo-img" height="45" width="120" class="img-fluid auto_size"
                                     src="{{ asset('assets/image/logo.png') }}" alt="logo-img">
                            </div>
                            {{--                                <div class="information-footer">--}}
                            {{--                                    <p>Địa chỉ: Tầng 2 số 74 - Đường Việt Bắc - Tp Thái Nguyên</p>--}}
                            {{--                                </div>--}}
                            <div class="padding_top10 clearfix">
                                <div class="social-icons">
                                    <ul class="social-icons list-inline">
                                        <li>
                                            <a class="tooltip-top" target="_blank"
                                               href="https://www.facebook.com/trathaivietvn" rel="noopener"
                                               aria-label="facebook" data-tooltip="Facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tooltip-top" target="_blank" href="https://www.tiktok.com/@trathaiviet?_t=8mBFdPebwht&_r=1"
                                               rel="noopener" aria-label="TikTok" data-tooltip="TikTok">
                                                <i class="fa-brands fa-tiktok"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tooltip-top" target="_blank"
                                               href="https://www.youtube.com/@TraThaiViet" rel="noopener"
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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">

                    <div class="widget widget_nav_menu clearfix">

                        <h3 class="widget-title">Thông tin </h3>

                        <ul id="menu-footer-quick-links">
                            <li>
                                <a href="#ve-chung-toi">
                                    <i class="fa fa-arrow-right"></i> Về chúng
                                    tôi</a>
                            </li>
                            <li>
                                <a href="#du-an">
                                    <i class="fa fa-arrow-right"></i>Dự án</a>
                            </li>
                            <li>
                                <a href="#lien-he">
                                    <i class="fa fa-arrow-right"></i> Liên hệ
                                </a>
                            </li>
                            <li>
                                <a href="#dich-vu">
                                    <i class="fa fa-arrow-right"></i>Dịch vụ</a>
                            </li>
                            <li>
                                <a href="#tin-tuc">
                                    <i class="fa fa-arrow-right"></i>Tin tức</a>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">

                    <div class="widget widget_nav_menu clearfix">

                        <h3 class="widget-title">Sản phẩm</h3>

                        <ul id="menu-footer-quick-links">
                            @foreach(\App\Models\Shop\Category::query()->where('is_visible', 1)->get() as $category)
                                <li>
                                    <a href="{{ route('products',['category' => $category->slug]) }}">
                                        <i class="fa fa-arrow-right"></i> {{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area" id="news_footer_custom">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Facebook</h3>
                        <div class="footer-tags mt-25">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftrathaivietvn&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=633874986796358"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-bg copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <span style="color: #0b2e13">© Copyright 2024-{{ date('Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
