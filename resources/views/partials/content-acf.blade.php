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
            @case('product_listing')
                @include('partials.sections.product_listing')
            @break
            @case('breadcrumb')
                @include('partials.sections.breadcrumb')
            @break
            @case('product_support_grid')
                @include('partials.sections.product_support_grid')
            @break
            @case('product_support_form')
                @include('partials.sections.product_support_form')
            @break
            @case('cta')
                @include('partials.sections.cta')
            @break
            @case('general_content')
                @include('partials.sections.general_content')
            @break
            @case('partner_grid')
                @include('partials.sections.partner_grid')
            @break
            @case('sales_team')
                @include('partials.sections.sales_team')
            @break
        @endswitch
    @endforeach
@endif

