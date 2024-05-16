@aware(['page'])
<section class="section-block module_service section-blog clearfix">
    <div class="container">
        <div class="head-blog d-flex flex-row justify-content-between align-items-center">
            <div class="title">
                {{ __('News') }}
            </div>
            <div class="button">
                <a href="{{ route('brand') }}">{{ __('Read more') }}</a>
            </div>
        </div>
        <div class="row slider-blog traviet-blog">
            @foreach($posts as $post)
                <div class="item">
                    <div class="thumb">
                        <a href="{{ route('brand.detail', $post->slug) }}">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}">
                        </a>
                    </div>
                    <div class="infor">
                        <div class="name">
                            {{ $post->author->name }}
                        </div>
                        <div class="except">
                            <a href="{{ route('brand.detail', $post->slug) }}">
                                {{ $post->title }}
                            </a>
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

