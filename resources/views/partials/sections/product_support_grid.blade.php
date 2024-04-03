<section class="py-40 product-wrapper lg:py-80">
    <div class="container-fluid xl3:container lgscreen:!px-0 ">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0 mb-40 text-center">
            <div class="mb-40 uppercase title title-Darkblue title-Redwing last:mb-0">
                <h2>{{ $content->heading}}</h2>
            </div>
            <div class="product-slider swiper ">
                <div class="swiper-wrapper">
                    @foreach($content->support_grid as $item)
                    <div class="swiper-slide">
                        <div class="p-24 border-2 border-solid card bg-White bg-opacity-10 border-DarkBlue rounded-5">
                            <div class="flex flex-col items-center justify-center gap-5">
                                <div class="img">
                                    <img src="{{ $item['image'] }}" class="xl2:max-w-full h-auto block mx-auto max-w-[60%] lozad">
                                </div>
                                <div class="text-center uppercase title title-Darkblue title-Redwing">
                                    <h4>{{ $item['heading'] }}</h4>
                                </div>
                                <div class="text-center content">
                                    <p>{!! $item['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
</section>