@aware(['page'])
@props(['title_type', 'title_text', 'title_image', 'image', 'process'])
<section class="section-block module_service about_image_text_01  clearfix section-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    @if($title_type == 'text')
                        <h3>{{ $title_text }}</h3>
                    @endif
                    @if($title_type == 'image')
                            <img src="{{ \Illuminate\Support\Facades\Storage::url(is_array($title_image) ? array_values($title_image)[0]: $title_image) }}">
                    @endif
                </div>
                <div class="slider-for-stept">
                    @foreach($process ?? [] as $step)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url( $step['image'] ?? '') }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" module_service section-stept clearfix">
    <div class="container">
        <div class="row slider-nav-stept stept-blog">
            @foreach($process ?? [] as $step)
                <div class="item">
                    <div class="stept-wrap">
                        <div class="stept-title">
                            {{ $step['step'] ?? '' }}
                        </div>
                        <div class="content">
                            {{ $step['content'] ?? '' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>