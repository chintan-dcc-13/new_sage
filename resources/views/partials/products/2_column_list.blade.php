<section class="py-40 equipment-wrapper bg-Blue-300 lg:py-80 ">
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap items-center justify-center w-full gap-10 p-0 m-0">
            <div class="p-0 m-0 text-center uppercase title title-White title-Redwing">
                <h2>{!! $content->title !!}
                </h2>
            </div>
            @if (!empty($content->list ))
            <div class="list-two-column white green-dot">
                <ul>
                    @foreach($content->list as $content)
                    @if(!empty($content['text_content']))
                    <li>{!! $content['text_content'] !!}</li>
                    @endif
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</section>