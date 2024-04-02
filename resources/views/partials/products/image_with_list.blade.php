<section class="py-40 prosuct-point-wrapper lg:py-80 ">
    <div class="container-fluid xl3:container">
        <div class="flex flex-col items-center justify-center w-full gap-10 p-0 m-0">
            <div class="img">
                <img src="{{ $content->image }}" class="block h-auto max-w-full mx-auto lozad" height="540" width="900">
            </div>
            <div class="list-two-column">
                <ol>
                    @foreach($content->list as $item)
                    <li><strong>{{ $item['title'] }}:</strong> {{ $item['content'] }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>