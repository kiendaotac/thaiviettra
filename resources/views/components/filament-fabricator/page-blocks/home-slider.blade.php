@aware(['page'])
<div class="slick_slider slider-banner lazy ">
    @foreach($images as $image)
        <div class="item">
            <img class="img-center img-banner" src="{{ \Illuminate\Support\Facades\Storage::url($image) }}">
        </div>
    @endforeach
</div>
