<section class="irrigation-box-wrapper py-40 lg:py-80 bg-Blue-300">
    
        <div class="container-fluid xl3:container">
            <div class="flex flex-wrap w-full items-center justify-center m-0 mb-40 p-0 relative lg:text-center">
                <div class="title title-White title-sub uppercase title-Redwing mb-24 last:mb-0 !flex flex-col gap-2">
                    <h2>{{ $content->title }}</h2>
                    <h4>{{ $content->sub_title }}</h4>
                </div>
                <div class="content white max-w-[658px]">
                    <p>{{ $content->section_description }}</p>
                </div>
            </div>
        </div>
        <div class="container-fluid mdscreen:!px-0 xl3:container">
            <div class="irrigation-slider swiper">
                <div class="swiper-wrapper">
                    @php
                    $image_cards = $content->image_cards;
                    @endphp
                    @if ($image_cards)
                    @foreach($image_cards as $content)
                    <div class="swiper-slide flex flex-col items-center justify-center gap-6">
                        <div class="img landscape">
                            <img src="{{ $content['image_card_image'] }}" class="img-fluid lozad">
                        </div>
                        <div class="details text-center px-16">
                            <div class="title title-White title-Redwing uppercase mb-8 last:mb-0">
                                <h4>{{ $content['image_card_title'] }}</h4>
                            </div>
                            <div class="content white mb-24 last:mb-0">
                                <p>{{ $content['image_card_content'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="irrigation-pagination swiper-pagination"></div>
            </div>
        </div>
</section>