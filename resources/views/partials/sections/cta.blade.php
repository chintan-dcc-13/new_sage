<section class="py-40 genral-content-wrapper lg:py-80 ">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0">
            <div class="w-full text-center lg:w-10/12">
                <div class="p-0 m-0 mb-16 text-center uppercase title title-Darkblue title-Redwing last:mb-0">
                    <h1 class="h2">
                    {{ $content->heading }}
                    </h1>
                </div>
                <div class="mb-40 content last:mb-0">
                    <p>{!! $content->content !!}</p>
                </div>
                <div class="text-center btn-custom">
                    <a href="{{ $content->button['url'] }}" class="btn btn-green" target="_self">
                        {{ $content->button['title'] }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>