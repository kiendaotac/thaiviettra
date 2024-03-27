<header id="masthead" class="header ttm-header-style-01">
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="site-navigation d-flex flex-row  justify-content-between align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a class="home-link" href="/" title="Trà Thái Việt" rel="home">
                                    <img id="logo-img" height="45" width="120" class="img-fluid auto_size"
                                         src="{{ asset('assets/image/logo.png') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class=" d-flex flex-row ">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
											<span class="menubar-box">
												<span class="menubar-inner"></span>
											</span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <div class="header_search_custom " id="search">
                                        <form class="d-flex flex-row  justify-content-center align-items-center">
                                            <input wire:model.live="keyword" class="search_query" type="text" placeholder="{{ __('Search') }}">
                                            <button type="submit" class="btn close-search button_search"
                                                    aria-label="searchbox-align">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <ul class="menu">
                                        @foreach($menus ?? [] as $menu)
                                            <li class="mega-menu-item {{ $menu['route'] ? (request()->routeIs(($menu['route']) . '*') ? 'active' : '') : '' }}">
                                                <a href="{{ $menu['route'] ? route($menu['route']) : '' }}">{{ $menu['name'] ?: '' }}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="language">
                                            <div class="language-title">
                                                <div class="item">{{ app()->getLocale() == 'vi' ? 'English' : 'Tiếng Việt' }}
                                                <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> -->

                                                </div>
                                                <div class="choose">
                                                    <ul>
                                                        <li class="active" @if(app()->getLocale() !== 'vi') style="filter: grayscale(1)" @endif>
                                                            <a href="{{ route('language.locale', 'vi') }}">
                                                                <img width="30" src="{{ asset('assets/image/la-co-viet-nam-vector-1.png') }}">
                                                            </a>
                                                        </li>
                                                        <li class="active" @if(app()->getLocale() !== 'en') style="filter: grayscale(1)" @endif>
                                                           <a href="{{ route('language.locale', 'en') }}">
                                                               <img width="30" src="{{ asset('assets/image/american_flag.png') }}">
                                                           </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                </nav>
                                <!-- menu end -->
                                <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                    <div class="padding_left15 ">
                                        <div class="header-right d-flex flex-row  justify-content-between align-items-center">
                                            <div class="icon-box d-flex flex-row  justify-content-between align-items-center">
                                                <div class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </div>
                                                <div class="content">
                                                    <span class="title">{{ $settings->where('key', 'hotline_number')->first()->value }}</span>
                                                    <span>{{ $settings->where('key', 'hotline')->first()->value }}</span>
                                                </div>
                                            </div>
                                            <div class="icon-box d-flex flex-row  justify-content-between align-items-center">
                                                <div class="icon">
                                                    <i class="flaticon flaticon-placeholder"></i>
                                                </div>
                                                <div class="content">
                                                    <span class="title">{{ $settings->where('key', 'store')->first()->value }}</span>
                                                    <span>{{ $settings->where('key', 'store_name')->first()->value }}</span>
                                                </div>
                                            </div>
                                            <div class="header-cart">
                                            <div class="icon">
                                                <img src="{{ asset('assets/image/shopping-cart.png') }}">
                                            </div>
                                            <div class="number">2</div>
                                        </div>
                                        </div>
                                        <div class="d-flex flex-row  align-items-center">

                                        <div class="language">
                                            <div class="language-title">
                                                <div class="item">{{ app()->getLocale() == 'vi' ? 'English' : 'Tiếng Việt' }}
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>

                                                </div>
                                                <div class="choose">
                                                    <ul>
                                                        <li class="active" @if(app()->getLocale() !== 'vi') style="filter: grayscale(1)" @endif>
                                                            <a href="{{ route('language.locale', 'vi') }}">
                                                                <img width="30" src="{{ asset('assets/image/la-co-viet-nam-vector-1.png') }}">
                                                            </a>
                                                        </li>
                                                        <li class="active" @if(app()->getLocale() !== 'en') style="filter: grayscale(1)" @endif>
                                                           <a href="{{ route('language.locale', 'en') }}">
                                                               <img width="30" src="{{ asset('assets/image/american_flag.png') }}">
                                                           </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>