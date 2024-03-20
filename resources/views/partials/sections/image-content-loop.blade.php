<section class="zigzag-img-content">
    @php
    $loop_content = $content->content_loop;
    @endphp

    @if ($loop_content)
    <div class="container-fluid xl3:container">
        @foreach($loop_content as $content)
        <div class="py-40 lg:py-80">
            <div class="zigzag-gap flex flex-wrap items-center justify-center w-full m-0 p-0 relative lgscreen:gap-10">
                <div class="w-full lg:flex-1 @if($content['content_position'] == 'left') lg:order-2 order-2 @elseif($content['content_position'] == 'right') lg:order-1 order-2 @endif">
                    <div class="content">
                        <div class="title title-Darkblue title-Redwing uppercase mb-16 last:mb-0 text-left">
                            <h2>{{ $content['title'] }}</h2>
                        </div>
                        <div class="content text-left">
                            {!! $content['content'] !!}
                        </div>
                        <div class="btn-custom text-left mt-24">
                            <a href="{{ $content['button_url'] }}" class="btn btn-green">{{ $content['button_label'] }}</a>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 xl:max-w-[626px] @if($content['content_position'] == 'left') lg:order-1 @elseif($content['content_position'] == 'right') lg:order-2 @endif order-1">
                    <div class="img landscape">
                        <img src="{{ $content['image'] }}" class="max-w-full h-auto block mx-auto lozad">
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
    @endif
</section>