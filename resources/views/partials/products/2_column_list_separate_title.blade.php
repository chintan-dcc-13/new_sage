<section class="py-40 equipment-wrapper bg-Aquamarine lg:py-80 ">
    <div class="hidden list-column list-two-column"></div>
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap items-center justify-center m-0 p-0 w-full gap-10 lg:gap-x-[55px] xl:gap-x-[100px]">
            @foreach($content->data as $item )
            <div class="lgscreen:w-full lg:flex-auto">
                <div class="p-0 m-0 mb-40 text-center uppercase title title-White title-Redwing last:mb-0">
                    <h2>{{ $item['title']  }}</h2>
                </div>
                <div class="{{ $item['column_style'] }} white white-dot">
                    <ul>
                        @foreach($item['list'] as $list)
                        <li>{!! $list['text_content'] !!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>