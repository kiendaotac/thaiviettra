<div class="site-main">
    <div class="banner">
        <img src="{{ asset('assets/image/back-7.png') }}">
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
