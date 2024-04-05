@php
    $background__color = '';
    $heading_title_class = '';
    $content_class = '';
    $form_class = '';

    if ($content->background_color == 'blue') {
        $background__color = 'py-40 request-form-wrapper lg:py-80 bg-Blue-300';
        $heading_title_class = 'p-0 m-0 mb-16 text-center uppercase title title-White title-Redwing last:mb-0';
        $content_class = 'text-center content white';
        $form_class = 'form white-label w-full lg:max-w-[820px]';
    } elseif ($content->background_color == 'white') {
        $background__color = 'py-40 dealer-form-wrapper lg:py-80';
        $heading_title_class = 'p-0 m-0 mb-16 xl2:text-center text-left uppercase title title-Darkblue title-Redwing last:mb-0';
        $content_class = 'xl2:text-center text-left content';
        $form_class = 'become-form w-full lg:max-w-[820px] mx-auto';
    }
@endphp

<section class="{{ $background__color }}">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full gap-10 p-0 m-0">
            <div class="w-full lg:w-10/12">
                <div class="{{ $heading_title_class }}">
                    <h1 class="h2">{{ $content->heading }}</h1>
                </div>
                <div class="{{ $content_class }}">
                    <p>{{ $content->description }}</p>
                </div>
            </div>
            <div class="{{ $form_class }}">
                {!! do_shortcode($content->support_form) !!}
            </div>
        </div>
    </div>
</section>