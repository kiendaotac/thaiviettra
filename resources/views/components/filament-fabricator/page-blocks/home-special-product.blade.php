@aware(['page'])
<section class=" container section-block module_service  ttm-row process-section ttm-bgimage-yes bg-img6 ttm-bg ttm-bgcolor-darkgrey res-991-margin_top_0 section-product clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="">
        <div class="head-blog light d-flex flex-row  justify-content-between align-items-center">
            <div class="title">
                {{ __('Special products') }}
            </div>
            <div class="button">
                <a href="{{ route('products') }}">{{ __("Read more") }}</a>
            </div>
        </div>
        <div class="row slider-product light traviet-product">
            @foreach($products as $product)
                <div class="item">
                    <div class="thumb">
                        <a href="{{ route('products.detail', $product->slug) }}">
                            <img src="{{ asset($product->hasMedia('product-images') ? $product->getFirstMediaUrl('product-images') : 'assets/image/product.jpg') }}">
                        </a>
                    </div>
                    <div class="infor">
                        <div class="name">
                            <a href="{{ route('products.detail', $product->slug) }}">{{ $product->name }}</a>
                        </div>
                        <div class="price">
                            {{ \Illuminate\Support\Number::currency($product->price, 'vnd', 'vi') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

