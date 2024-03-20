<section class="advantages py-40 lg:py-80 bg-Aquamarine ">
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap w-full items-center justify-center m-0 mb-40 p-0 relative text-center">

            <div class="w-full lg:max-w-[1352px]">
                <div class="title title-White uppercase title-Redwing mb-40 last:mb-0">
                    <h2>{{ $content->title }}</h2>
                </div>
                <div class="img mb-40 last:mb-0">
                    <img src="{{ $content->image }}" class="max-w-full h-auto block mx-auto lozad" alt="turbine">
                </div>
                <div class="content white">
                    <p>{{ $content->section_description}}</p>
                </div>
            </div>
        </div>
    </div>

    @php
    $advantage = $content->advantage;
    @endphp
    @if ($advantage)
    <div class="container-fluid lgscreen:!px-0 xl3:container">
        <div class="advantages-slider swiper">
            <div class="swiper-wrapper">
                @foreach ($advantage as $content)
                <div class="swiper-slide">
                    <div class="card bg-White bg-opacity-10 border-1 border-solid border-White rounded-5 p-24">
                        <div class="flex flex-col items-center justify-center gap-10">
                            <div class="img">
                                <img src="{{ $content['advantage_image'] }}" class="max-w-full h-auto block mx-auto lozad">
                            </div>
                            <div class="content white">
                                <p class="text-16 text-White text-lineHeight-20">{{ $content['advantage_content'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    @endif

</section>