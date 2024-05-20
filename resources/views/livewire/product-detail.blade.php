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
        <div class="ttm-bgcolor-primary" wire:ignore.self>
            <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-row perfomance-section bg-layer-equal-height product-detail clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" wire:ignore>
                            <div class="slider-for px-0">
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
                                <div class="name">
                                    {{ $product->name }}
                                </div>
                                <div class="about">
                                    <span>{{ __('Product description') }}</span>
                                    <p>{!! $product->description !!}</p>
                                </div>
                                @php
                                if ($variant) {
                                    $variantPrice = $product->variants->where('id', $variant)->first()->price;
                                    $price = \Illuminate\Support\Number::currency($variantPrice, in: 'VND', locale: 'vi');
                                } else {
                                    $price = \Illuminate\Support\Number::currency($product->price, in: 'VND', locale: 'vi');
                                }
                                @endphp
                                <div class="price">{{ $price }}</div>
                                <div class="form-group">
                                    <div class="form-item d-flex flex-row number align-items-center">
                                        <span>{{ __('Quantity') }}</span>
                                        <input wire:model.debounce="qty" type="number" class="form-control bfh-number">
                                        @if($product->variants->count())
                                            <select wire:model.live="variant" class="form-control" style="width: 200px; margin-left: 10px">
                                                @foreach($product->variants ?? [] as $v)
                                                    <option value="{{ $v->id }}">{{ \Illuminate\Support\Number::format($v->weight) }} (gram)</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                    <div class="btn-group">
                                        <button class="add-to-cart" wire:click.prevent="addToCart">
                                            {{ __('Add to card') }}
                                            <span>
                                                <img src="{{ asset('assets/image/shopping-cart.png') }}">
                                            </span>
                                        </button>
                                        <button wire:click.prevent="buyNow">{{ __('Buy now') }}</button>
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
            <section class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-darkgrey ttm-row perfomance-section bg-layer-equal-height clearfix">
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
            <section
                class="section-block module_service process-section ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-row perfomance-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="head-blog  d-flex flex-row  justify-content-between align-items-center">
                        <div class="title">
                            <h5>{{ __("Related products") }}</h5>
                        </div>
                    </div>
                    <div class="row slider-product  traviet-product " wire:ignore>
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
            </section>
        </div>
    </div>