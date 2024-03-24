<div>
    <div class="site-main">
        <div class="banner">
            <img src="{{ asset('assets/image/back-7.png') }}">
        </div>
        <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-primary ttm-row perfomance-section bg-layer-equal-height clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider-for">
                            @foreach($product->getMedia('product-images') ?? [] as $image)
                                <img src="{{ $image->getUrl() }}">
                            @endforeach
                        </div>
                        <div class="slider-nav">
                            @foreach($product->getMedia('product-images') ?? [] as $image)
                                <img src="{{ $image->getUrl() }}">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-detail">
                            <div class="name">
                                {{ $product->name }}
                            </div>
                            <div class="meta d-flex ">
                                    <span>
                                        Mã sản phẩm <br>
                                        {{ $product->sku }}
                                    </span>
                                <span>
                                        Xuất xứ<br>
                                        {{ $product->brand->name }}
                                    </span>
                            </div>
                            <div class="about">
                                <span>Mô tả sản phẩm</span>
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="price">{{ $product->price }}</div>
                            <div class="form-group">
                                <div class="form-item d-flex flex-row number align-items-center">
                                    <span>Số lượng</span>
                                    <input input type="number" class="form-control bfh-number">
                                </div>
                                <div class="btn-group">
                                    <button class="add-to-cart">
                                        Thêm vào giỏ hàng <span> <img src="{{ asset('assets/image/shopping-cart.png') }}"> </span>
                                    </button>
                                    <button>Mua ngay</button>
                                </div>
                            </div>
                            <div class="meta-group d-flex flex-row align-items-center">
                                <div class="item d-flex align-items-center">
                                    <img src="{{ asset('assets/image/like.png') }}">
                                    Chất lượng tiêu chuẩn
                                </div>
                                <div class="item d-flex align-items-center">
                                    <img src="{{ asset('assets/image/free.png') }}">
                                    Miễn phí vận chuyển
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
                class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-darkgrey ttm-row perfomance-section bg-layer-equal-height clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <img src="{{ asset('assets/image/back-5.png') }}">
                    </div>
                    <div class="col-lg-4">
                        <span class="mfb-10 fwb fs-20" style="display: inline-block;">Nguyên liệu</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora dolore perspiciatis
                            distinctio. Molestias ea maxime corporis nostrum aliquam nulla exercitationem sed
                            delectus suscipit! Eligendi, nesciunt accusamus? Nemo eius aliquid voluptas. Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Harum aspernatur molestias et maiores ex
                            laboriosam necessitatibus neque consectetur provident pariatur ullam nostrum vitae
                            maxime quod incidunt, nesciunt impedit quasi nam.</p>
                    </div>
                </div>

                <span class="mfb-10 fwb fs-20" style="display: inline-block; margin-top: 20px;">Nguyên liệu</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora dolore perspiciatis distinctio.
                    Molestias ea maxime corporis nostrum aliquam nulla exercitationem sed delectus suscipit!
                    Eligendi, nesciunt accusamus? Nemo eius aliquid voluptas. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Harum aspernatur molestias et maiores ex laboriosam necessitatibus neque
                    consectetur provident pariatur ullam nostrum vitae maxime quod incidunt, nesciunt impedit quasi
                    nam.</p>
                <span class="mfb-10 fwb fs-20" style="display: inline-block; margin-top: 20px;">Nguyên liệu</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora dolore perspiciatis distinctio.
                    Molestias ea maxime corporis nostrum aliquam nulla exercitationem sed delectus suscipit!
                    Eligendi, nesciunt accusamus? Nemo eius aliquid voluptas. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Harum aspernatur molestias et maiores ex laboriosam necessitatibus neque
                    consectetur provident pariatur ullam nostrum vitae maxime quod incidunt, nesciunt impedit quasi
                    nam.</p>
            </div>
        </section>
    </div>
    <section
            class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-primary ttm-row perfomance-section bg-layer-equal-height clearfix">
        <div class="container">
            <div class="head-blog  d-flex flex-row  justify-content-between align-items-center">
                <div class="title">
                    Sản phẩm liên quan
                </div>
            </div>
            <div class="row slider-product  traviet-product ">
                @foreach($products  as $product)
                    <div class="item ">
                        <div class="thumb">
                            <img src="{{ asset($product->hasMedia('product-images') ? $product->getFirstMediaUrl('product-images') : 'assets/image/product.jpg') }}">
                        </div>
                        <div class="infor">
                            <div class="name">
                                <a href="#" tabindex="-1">{{ $product->name }}</a>
                            </div>
                            <div class="price">
                                {{ $product->price }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
