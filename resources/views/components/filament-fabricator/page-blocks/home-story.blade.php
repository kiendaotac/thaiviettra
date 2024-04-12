@aware(['page'])
@props(['post', 'media_type', 'media_image', 'media_video', 'title_type', 'title_image', 'title_text'])
@php
    $post = \App\Models\Blog\Post::find($post);
@endphp
<section class="section-block module_service ttm-row consistency-section ttm-bgcolor-darkgrey  text_tab_image ttm-row perfomance-section  clearfix "
         id="module_service-0">
    <div class="container">
        <div class="row">
            @if($media_type == 'video')
                <div class="col-lg-8">
                    <iframe width="100%" height="500"
                            src="{{ $media_video }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            @endif
            @if($media_type == 'image')
                    <div class="col-lg-8 about-section">
                        <div class="about-img">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($media_image) }}">
                        </div>
                    </div>
            @endif
            <div class="col-lg-4 d-none d-lg-block">
                <div class="about-home">
                    <div class="title">
                        @if($title_type == 'image')
                            <img src="{{ \Illuminate\Support\Facades\Storage::url(is_array($title_image) ? array_values($title_image)[0]: $title_image) }}">
                        @endif
                        @if($title_type == 'text')
                            <h3>{{ $title_text }}</h3>
                        @endif
                    </div>
                    <div class="content">
                        {{ \Illuminate\Mail\Markdown::parse(\Illuminate\Support\Str::words($post->description, 60)) }}
                    </div>
                    <a href="{{ route('brand.detail', $post->slug) }}">
                        <div class="button">
                            {{ __('Read more') }}<i class="fa fa-caret-right" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
