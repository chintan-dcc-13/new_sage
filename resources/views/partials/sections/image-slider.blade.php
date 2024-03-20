<section class="footer-gallery bg-Gray-100 py-40">
    <div class="footer-image-slider swiper">
        <div class="swiper-wrapper">
            @php
                $slider_images = $content->slider_images;
            @endphp
            @if($slider_images)
            @foreach( $slider_images as $content)
            <div class="swiper-slide">
                <div class="img landscape">
                    <img src="{{ $content['slider_image'] }}" class="img-fluid">
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>