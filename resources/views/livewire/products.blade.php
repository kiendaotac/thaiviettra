<div class="site-main">
    <div class="banner">
        <img src="assets/image/back-7.png">
    </div>
    <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-primary  clearfix">
        <div class="container">
            <div class="category-list">
                <ul class=" ">
                    @foreach($categories as $category)
                        <li>
                            <a href="#" wire:click.prevent="setCategory('{{ $category->slug }}')">
                                <span class="image">
                                    <img src="{{ asset($category->hasMedia('category-images') ? $category->getFirstMediaUrl('category-images') : 'assets/image/product2.jpg') }}" width="120px">
                                </span>
                                <span class="name">{{ $category->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <div class="head-blog  d-flex flex-row justify-content-between align-items-center __web-inspector-hide-shortcut__">
                    <div class="title">
                        Sản phẩm bán chạy
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="traviet-product ">
                                <div class="thumb">
                                    <a href="{{ route('products.detail', $product->slug) }}">
                                        <img src="{{ asset($product->hasMedia('product-images') ? $product->getFirstMediaUrl('product-images') : 'assets/image/product.jpg') }}">
                                    </a>
                                </div>
                                <div class="infor">
                                    <div class="name">
                                        <a href="{{ route('products.detail', $product->slug) }}" tabindex="0">{{ $product->name }}</a>
                                    </div>
                                    <div class="price">
                                        {{ \Illuminate\Support\Number::currency($product->price, in: 'VND', locale: 'Vi') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
