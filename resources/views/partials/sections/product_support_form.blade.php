<section class="py-40 request-form-wrapper lg:py-80 bg-Blue-300 ">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full gap-10 p-0 m-0">
            <div class="w-full lg:w-10/12">
                <div class="p-0 m-0 mb-16 text-center uppercase title title-White title-Redwing last:mb-0">
                    <h1 class="h2">{{ $content->heading }}</h1>
                </div>
                <div class="text-center content white">
                    <p>{{ $content->description }}</p>
                </div>
            </div>
            <div class="form white-label w-full lg:max-w-[820px]">
                    {!! do_shortcode($content->support_form) !!}
            </div>
        </div>
    </div>
</section>