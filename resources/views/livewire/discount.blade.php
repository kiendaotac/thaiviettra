<div class="site-main">
    <div class="banner">
        <img src="{{ asset('assets/image/back-7.png') }}">
    </div>
    @php
        $product = $discount->product;
    @endphp
    <div class="ttm-bgcolor-primary">
        @if($product)
            <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-row perfomance-section bg-layer-equal-height product-detail clearfix">
                <div class="container">
                    <div class="head-blog  d-flex flex-row  justify-content-between align-items-center">
                        <div class="title">
                            <h4>{{ $discount->name }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 pl-0">
                            <div class="slider-for">
                                @foreach($product->getMedia('product-images') ?? [] as $image)
                                    <img src="{{ $image->getUrl() }}">
                                @endforeach
                            </div>
                            <div class="slider-nav px-3">
                                @foreach($product->getMedia('product-images') ?? [] as $image)
                                    <img src="{{ $image->getUrl() }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-detail">
                                <div class="name text-uppercase">
                                    {{ $product->name }}
                                </div>
                                <div class="about">
                                    <span>{{ __('Product description') }}</span>
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div class="price">{{ \Illuminate\Support\Number::currency($product->price, in: 'VND', locale: 'vi') }}</div>
                                <div class="form-group">
                                    <div class="form-item d-flex flex-row number align-items-center">
                                        <span>{{ __('Quantity') }}</span>
                                        <input input type="number" class="form-control bfh-number">
                                    </div>
                                    <div class="btn-group">
                                        <button class="add-to-cart">
                                            {{ __('Add to card') }}
                                            <span>
                                                <img src="{{ asset('assets/image/shopping-cart.png') }}">
                                            </span>
                                        </button>
                                        <button>{{ __('Buy now') }}</button>
                                    </div>
                                </div>
                                <div class="meta-group d-flex flex-row align-items-center">
                                    <div class="item d-flex align-items-center">
                                        <img src="{{ asset('assets/image/like.png') }}">
                                        {{ __('High quality') }}
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <img src="{{ asset('assets/image/free.png') }}">
                                        {{ __('Free shipping') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if($discount->saleProducts)
            <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-row perfomance-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="head-blog  d-flex flex-row  justify-content-between align-items-center">
                        <div class="title">
                            <h5>{{ __("Sản phẩm bán chạy") }}</h5>
                        </div>
                    </div>
                    <div class="row slider-product  traviet-product ">
                        @foreach($discount->saleProducts as $product)
                            <div class="item ">
                                <div class="thumb">
                                    <a href="{{ route('products.detail', $product->slug) }}">
                                        <img src="{{ asset($product->hasMedia('product-images') ? $product->getFirstMediaUrl('product-images') : 'assets/image/product.jpg') }}">
                                    </a>
                                </div>
                                <div class="infor">
                                    <div class="name">
                                        <a href="{{ route('products.detail', $product->slug) }}" tabindex="-1">{{ $product->name }}</a>
                                    </div>
                                    <div class="price">
                                        {{ \Illuminate\Support\Number::currency($product->price, 'VND', 'vi') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        @if($discount->paper)
            <div class="container ">
                <section style="padding-top:30px; padding-bottom:30px" class="section-block module_service process-section ttm-bgcolor-darkgrey ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-primary2 ttm-row perfomance-section about-section-2 bg-layer-equal-height clearfix">
                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="head-blog  d-flex flex-row  justify-content-center align-items-center">
                        <div class="title">
                            Chứng nhận kiểm định
                        </div>
                    </div>
                    <div class="row slider-product traviet-product ">
                        @foreach($discount->paper as $image)
                            <div class="item ">
                                <div class="thumb">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($image['image']) }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        @endif
        @if($discount->relateProducts)
            <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-row perfomance-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="head-blog  d-flex flex-row  justify-content-between align-items-center">
                        <div class="title">
                            <h5>{{ __("Related products") }}</h5>
                        </div>
                    </div>
                    <div class="row slider-product  traviet-product ">
                        @foreach($discount->relateProducts as $product)
                            <div class="item ">
                                <div class="thumb">
                                    <a href="{{ route('products.detail', $product->slug) }}">
                                        <img src="{{ asset($product->hasMedia('product-images') ? $product->getFirstMediaUrl('product-images') : 'assets/image/product.jpg') }}">
                                    </a>
                                </div>
                                <div class="infor">
                                    <div class="name">
                                        <a href="{{ route('products.detail', $product->slug) }}" tabindex="-1">{{ $product->name }}</a>
                                    </div>
                                    <div class="price">
                                        {{ \Illuminate\Support\Number::currency($product->price, 'VND', 'vi') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
</div>