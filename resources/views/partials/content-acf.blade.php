@if ($acfdata)
    @foreach ($acfdata as $content)
        @switch($content->layout)
            @case('home_page_banner')
                @include('partials.sections.home-banner')
            @break

            @case('image_content_loop')
                @include('partials.sections.image-content-loop')
            @break

            @case('image_card_grid')
                @include('partials.sections.image-card-grid')
            @break

            @case('advantages')
                @include('partials.sections.advantages')
            @break

            @case('image_slider')
                @include('partials.sections.image-slider')
            @break
        @endswitch
    @endforeach
@endif
