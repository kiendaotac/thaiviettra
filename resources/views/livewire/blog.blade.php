@php
    $page = \Z3d0X\FilamentFabricator\Models\Page::query()->where('slug', 'home')->first();
    $data = collect($page->blocks)->filter(fn($item) => $item['type'] == 'home-slider')->first();
    $images = $data['data']['images'] ?? [];
@endphp
<div class="site-main">
    <div class="banner">
        <div class="slick_slider slider-banner lazy ">
            @foreach($images as $image)
                <div class="item">
                    <img class="img-center img-banner" src="{{ \Illuminate\Support\Facades\Storage::url($image) }}">
                </div>
            @endforeach
        </div>
    </div>
    <div class="ttm-bgcolor-primary">
        <section
            class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-row perfomance-section bg-layer-equal-height clearfix">
            <div class="container">
            <h3 class="title">Tin tức</h3>
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 traviet-blog page">
                            <div class="thumb">
                                <a href="{{ route('brand.detail', $blog->slug) }}">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($blog->image) }}">
                                </a>
                            </div>
                            <div class="infor">
                                <div class="name">
                                    <a href="{{ route('brand.detail', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="container ">

            <section class="section-block module_service process-section ttm-bgcolor-darkgrey ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-primary2 ttm-row perfomance-section about-section-2 bg-layer-equal-height clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>

                <div class="head-blog  d-flex flex-row  justify-content-between align-items-center">
                    <div class="title">
                        Sản phẩm mới nhất
                    </div>
                </div>
                <div class="row slider-product light traviet-product ">
                    @foreach($products as $product)
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
    </div>
    </section>
</div>
</div>
</div>