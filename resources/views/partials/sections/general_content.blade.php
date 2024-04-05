<section class="genral-content-wrapper py-40 lg:py-80 bg-Blue-300 ">
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap w-full items-center justify-center m-0 p-0 relative lg:text-center">
            <div class="w-full lg:w-10/12">
                <div class="title title-White uppercase title-Redwing mb-16 last:mb-0">
                    <h2>{{ $content -> heading }}</h2>
                </div>
                <div class="content white list-globle">
                    <p>{!! $content->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>