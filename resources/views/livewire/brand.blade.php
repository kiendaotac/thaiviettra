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
    <session class="section-block module_service ttm-row consistency-section ttm-bgcolor-primary  text_tab_image ttm-row about-section  clearfix " style="    display: block;">
        @foreach($posts as $post)
            @if($loop->odd)
                <div class="section-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-lg-block">
                                <div class="about-home">
                                    <div class="title">
                                        {{ $post->title }}
                                    </div>
                                    <div class="content">
                                        {!! \Illuminate\Mail\Markdown::parse($post->description) !!}
                                    </div>
                                    <a href="{{ route('brand.detail', $post->slug) }}">
                                        <div class="button-primary">
                                            {{ __('Details') }}
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6  about-img">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($loop->even)
                    <div class="section-block tm-bgimage-yes bg-img6 ttm-bg  ttm-bgcolor-darkgrey " >
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 about-img">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}">
                                </div>
                                <div class="col-lg-6 d-lg-block">
                                    <div class="about-home">
                                        <div class="title">
                                            {{ $post->title }}
                                        </div>
                                        <div class="content">
                                            {!! \Illuminate\Mail\Markdown::parse($post->description) !!}
                                        </div>
                                        <a href="{{ route('brand.detail', $post->slug) }}">
                                            <div class="button-primary" style="float:right;">
                                                {{ __('Details') }}
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
        @endforeach
        </session>
</div>