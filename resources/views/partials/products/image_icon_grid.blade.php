<section class="py-40 application-wrapper lg:py-80 ">
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap items-center justify-center w-full p-0 m-0">
            <div class="p-0 m-0 mb-40 text-center uppercase title title-Gray title-Redwing last:mb-0">
                <h2>{{ $content->title }}</h2>
            </div>
            <div class="grid w-full grid-cols-2 gap-5 p-0 m-0 lg:grid-cols-5 md:grid-cols-3 xsscreen2:grid-cols-1">
                @foreach($content->grid as $item)
                <div class="card bg-White p-20 gap-[10px] flex flex-wrap items-center justify-center">
                    <div class="img">
                        <img src="{{ $item['image'] }}" class="block h-auto max-w-full lozad" width="60" height="60">
                    </div>
                    <div class="text-center content">
                        <p>{{ $item['title'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>