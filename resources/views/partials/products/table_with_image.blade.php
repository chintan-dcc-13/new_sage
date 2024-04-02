@if ($content->background == 'white')
    @php
        $background_color_class = '';
        $table_color_class = 'table-blue';
        $title_color_class = 'title-Darkblue';
    @endphp
@elseif($content->background == 'blue')
    @php
        $background_color_class = 'bg-Blue-300';
        $table_color_class = 'table-blue white';
        $title_color_class = 'title-White';
    @endphp
@endif
<section class="py-40 table-wrapper {{ $background_color_class }} lg:py-80 ">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0 mb-40 last:mb-0">
            <div class="p-0 m-0 mb-20 text-center uppercase title {{ $title_color_class }} title-Redwing last:mb-0">
                <h2>{{ $content->title }}</h2>
            </div>
        </div>
        <div class="relative flex flex-wrap items-center justify-center w-full gap-10 p-0 m-0 mb-40 {{ $table_color_class }} last:mb-0">
            <table>
                <thead>
                    <tr>
                        @foreach( $content->table as $item )
                        <th>{{ $item['heading'] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($content->table[0]['data'] as $index => $rawData )
                    <tr>
                        @foreach($content->table as $item)
                        <td data-label="{!! $item['heading'] !!}">
                            <span>{!! $item['data'][$index]['text'] !!}</span>
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="img">
                <img src="{{ $content -> table_image }}" class="block h-auto max-w-full mx-auto lozad">
            </div>
        </div>
    </div>
</section>