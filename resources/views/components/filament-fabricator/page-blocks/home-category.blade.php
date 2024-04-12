@aware(['page'])
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
