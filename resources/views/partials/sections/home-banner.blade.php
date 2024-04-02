<section class="banner-wrapper bg-White relative overflow-hidden h-[665px] lg:h-[650px] ">

    <div class="img absolute top-0 left-0 w-full h-full">
        <img src="{{ $content->background_image }}" class="img-fluid lozad" alt="herobanner" data-loaded="true">
    </div>
    <div class="video-bg absolute top-0 left-0 w-full h-full">
        <video src="{!! $content->video_background['url'] !!}" class="w-full h-full object-cover" loop muted autoplay></video>
    </div>
    <div class="banner-details relative h-full">

        <div class="container-fluid h-full">
            <div class="flex flex-col items-center justify-center w-full m-0 p-0 h-full text-center">
                @if ($content->is_image_title)
                    @if ($content->title_image)
                        <img src="{{ $content->title_image }}" class="title-image">
                    @endif
                @else
                    @if ($content->title)
                        <h1 class="Title">{{ $content->title }}</h1>
                    @endif
                @endif
                <div class="title title-White font-Outfit mb-24 last:mb-0">
                    <h1 class="h3">{{ $content->sub_title }}</h1>
                </div>
                <div class="btn-custom">
                    <a href="{{ $content->button_url }}" class="btn btn-green">{{ $content->button_label }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
