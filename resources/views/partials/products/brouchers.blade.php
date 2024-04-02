<section class="py-40 brochure-wrapper lg:py-80 bg-Blue-300 ">
    <div class="container-fluid xl3:container mdscreen:!px-0">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0">
            <div class="w-full lg:w-10/12">
                <div class="brochure-slider swiper">
                    <div class="swiper-wrapper">
                        @foreach($content->broucher_data as $broucher)
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="img">
                                    <img src="{{ $broucher['image'] }}" class="block h-auto max-w-full mx-auto drop-shadow-brochure lozad" width="196" height="153">
                                </div>
                                <div class="px-20 pb-10 text-center border-solid box border-1 border-DarkBlue bg-Gray-100">
                                    <div class="mt-20 mb-10 uppercase title title-Darkblue title-Redwing last:mb-0">
                                        <h4>{{ $broucher['title'] }}</h4>
                                    </div>
                                    <div class="btn-custom">
                                        <a href="{{ $broucher['file']['link'] }}" class="btn btn-link" target="_blank">
                                            Brochure
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>