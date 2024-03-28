<div class="site-main">
    <div class="slick_slider slider-banner lazy ">
        <div class="item">
            <img class="img-center img-banner" src="assets/image/back.png">
        </div>
        <div class="item">
            <img class="img-center img-banner" src="assets/image/back.png">
        </div>
    </div>
    <div class="ttm-bgcolor-primary">
    <section class="section-block news_module ttm-row category-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <a href="{{ route('products', ['category' => $category->slug]) }}">
                                    <div class="category">
                                        <div class="thumb">
                                            <img src="{{ asset($category->hasMedia('category-images') ? $category->getFirstMediaUrl('category-images') : 'assets/image/cate1.png') }}">
                                        </div>
                                        <div class="content">
                                            {{ $category->name }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="section-block module_service ttm-row consistency-section ttm-bgcolor-darkgrey  text_tab_image ttm-row perfomance-section  clearfix "
            id="module_service-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/JSTwA3_hUJs?si=wBOuJCdnCmgkqe52"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="about-home">
                        <div class="title">
                            <img src="assets/image/back-3.png">
                        </div>
                        <div class="content">
                            Thái Việt Tea ra đời từ tình yêu và niềm đam mê sâu sắc với trà của shark Phạm Thanh
                            Hưng và phu nhân Nguyễn Thu Trang. Nhưng ít ai biết rằng, ý tưởng thôi thúc vợ chồng
                            shark Hưng xây dựng nên thương hiệu lại bắt nguồn từ câu chuyện rất đỗi đời thường…
                        </div>
                        <div class="button">
                            Tìm hiểu thêm <i class="fa fa-caret-right" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Dream-section-->
        <section class="section-block module_service about_image_text_01  clearfix section-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <img src="assets/image/back-6.png">
                        </div>
                        <div class="">
                            <img src="assets/image/back-5.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Dream-section-end-->
    <section class="section-block">
        <section class=" module_service section-stept clearfix">
            <div class="container">
                <div class="row slider-stept stept-blog">
                    <div class="item">
                        <div class="stept-wrap">
                            <div class="stept-title">
                                Bước 1
                            </div>
                            <div class="content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique perspiciatis animi ipsum ipsam? Eveniet libero nulla placeat 										tempore ea. Expedita odit sapiente tenetur, hic facere tempore corrupti mollitia assumenda?
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stept-wrap">
                            <div class="stept-title">
                                Bước 1
                            </div>
                            <div class="content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique perspiciatis animi ipsum ipsam? Eveniet libero nulla placeat 										tempore ea. Expedita odit sapiente tenetur, hic facere tempore corrupti mollitia assumenda?
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stept-wrap">
                            <div class="stept-title">
                                Bước 1
                            </div>
                            <div class="content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique perspiciatis animi ipsum ipsam? Eveniet libero nulla placeat 										tempore ea. Expedita odit sapiente tenetur, hic facere tempore corrupti mollitia assumenda?
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stept-wrap">
                            <div class="stept-title">
                                Bước 1
                            </div>
                            <div class="content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique perspiciatis animi ipsum ipsam? Eveniet libero nulla placeat 										tempore ea. Expedita odit sapiente tenetur, hic facere tempore corrupti mollitia assumenda?
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stept-wrap">
                            <div class="stept-title">
                                Bước 1
                            </div>
                            <div class="content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique perspiciatis animi ipsum ipsam? Eveniet libero nulla placeat 										tempore ea. Expedita odit sapiente tenetur, hic facere tempore corrupti mollitia assumenda?
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stept-wrap">
                            <div class="stept-title">
                                Bước 1
                            </div>
                            <div class="content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique perspiciatis animi ipsum ipsam? Eveniet libero nulla placeat 										tempore ea. Expedita odit sapiente tenetur, hic facere tempore corrupti mollitia assumenda?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--perfomance-section-->
        <section class="section-block module_service section-blog clearfix">
            <div class="container">
                <div class="head-blog d-flex flex-row justify-content-between align-items-center">
                    <div class="title">
                        Tin Tức
                    </div>
                    <div class="button">
                        <a href="{{ route('brand') }}">Xem Thêm</a>
                    </div>
                </div>
                <div class="row slider-blog traviet-blog">
                    @foreach($posts as $post)
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}">
                            </div>
                            <div class="infor">
                                <div class="name">
                                    {{ $post->author->name }}
                                </div>
                                <div class="except">
                                    {{ $post->title }}
                                </div>
                                <div class="read-more">
                                    <a href="{{ route('brand.detail', $post->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- image-section-end-->
        <section class=" container section-block module_service  ttm-row process-section ttm-bgimage-yes bg-img6 ttm-bg ttm-bgcolor-darkgrey res-991-margin_top_0 section-product clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="">
                <div class="head-blog light d-flex flex-row  justify-content-between align-items-center">
                    <div class="title">
                        Sản phẩm nổi bật
                    </div>
                    <div class="button">
                        <a href="{{ route('products') }}">Xem Thêm</a>
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
    </section>
    </div>
</div>