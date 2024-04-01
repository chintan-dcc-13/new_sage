<section class="py-40 pdp-wrapper lg:py-80">
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap items-center justify-center m-0 p-0 w-full gap-10 lg:gap-[55px] xl:gap-[100px]">
            <div class="lgscreen:w-full lg:max-w-[45%] lg:flex-[0_0_45%]">
                <div class="swiper pdp-slider mb-30">
                    <div class="swiper-wrapper">
                        @if($gallery)
                        @foreach($gallery as $item)
                        <div class="swiper-slide">
                            <div class="img portrait">
                                <img src="{!! $item['gallery_image']['url'] !!}" class="img-fluid lozad">
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="swiper pdp-slider-thumb">
                    <div class="swiper-wrapper">
                        @if($gallery)
                        @foreach($gallery as $item)
                        <div class="swiper-slide">
                            <div class="img portrait">
                                <img src="{!! $item['gallery_image']['url'] !!}" class="img-fluid lozad">
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="lgscreen:w-full lg:flex-1">
                <div class="flex flex-col items-start justify-center w-full p-0 m-0 gap-7">
                    <div class="uppercase title title-Darkblue title-Redwing">
                        <h1>{!! $title !!}</h1>
                    </div>
                    <ul class="flex justify-start w-full p-0 m-0 cta_bc mdscreen:flex-col md:flex-wrap md:items-center gap-y-3 gap-x-7  cat-iveco-engine">
                        <li>{{ $brand_name }}</li>
                        <li class="divider"></li>
                        <li>{{ $collection_name }}</li>
                    </ul>
                    <div class="content">
                        <p>{!! $content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>