<section class="Home-banner">
    <div class="content-wrap page-width">
    
            
            @if( $content-> is_image_title)
            @if( $content->title_image )
                <img src="{{ $content->title_image }}" class="title-image" >
            @endif
                @else
            @if( $content->title )
                <h1 class="Title">{{ $content->title }}</h1>
            @endif
            @endif
                <h2 class="sub-title">{{ $content->sub_title }}</h2>
                <a href="{{ $content->button_url }}" class="banner-button font-bold">{{ $content->button_label }}</a>
                <style>
    section.Home-banner{
        background-image: url('{{$content->background_image}}');
    }
</style>
            
        
    </div>
</section>
