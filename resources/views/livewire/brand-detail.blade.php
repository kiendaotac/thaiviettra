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
    <div class="ttm-bgcolor-primary section-block">
        <section class="section-block module_service ttm-row consistency-section text_tab_image ttm-row about-section  clearfix ">
            <div class="section-block" style="padding-top:0">
                <div class="container">
                    <div class="about-home">
                        <div class="title2">
                            {{ $post->title }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-block">
                <div class="container">
                    {!! \Illuminate\Mail\Markdown::parse($post->content) !!}
                </div>
            </div>
        </section>
    </div>
</div>
