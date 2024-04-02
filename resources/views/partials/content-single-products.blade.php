@include('partials.products.default')

@if ($ProductsContent)
    @foreach ($ProductsContent as $content)
        @switch($content->layout)
            @case('2_column_list')
                @include('partials.products.2_column_list')
            @break

            @case('table')
                @include('partials.products.table')
            @break

            @case('table_with_image')
                @include('partials.products.table_with_image')
            @break
            @case('image_icon_grid')
                @include('partials.products.image_icon_grid')
            @break
            @case('2_column_list_separate_title')
                @include('partials.products.2_column_list_separate_title')
            @break
            @case('image_with_list')
                @include('partials.products.image_with_list')
            @break
            @case('brouchers')
                @include('partials.products.brouchers')
            @break
        @endswitch
    @endforeach
@endif
