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
        @endswitch
    @endforeach
@endif
