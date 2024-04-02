@if ($content->background == 'white')
    @php
        $background_color_class = '';
        $table_color_class = 'table-blue';
        $title_color_class = 'title-Darkblue';
    @endphp
@elseif($content->background == 'aquamarine')
    @php
        $background_color_class = 'bg-Aquamarine';
        $table_color_class = 'table-darkblue';
        $title_color_class = 'title-White';
    @endphp
@elseif($content->background == 'blue')
    @php
        $background_color_class = 'bg-Blue-300';
        $table_color_class = 'table-blue white';
        $title_color_class = 'title-White';
    @endphp
@endif

<section class="py-40 table-wrapper {!! $background_color_class !!} lg:py-80 ">
    <div class="container-fluid xl3:container">
        @foreach ($content->table as $item)
            <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0 mb-40 last:mb-0">
                <div class="p-0 m-0 mb-20 text-center uppercase title {{ $title_color_class }} title-Redwing last:mb-0">
                    <h2>{!! $item['data']['title'] !!}</h2>
                </div>
            </div>
            <div
                class="relative flex flex-wrap items-center justify-center w-full gap-10 p-0 m-0 mb-40 {{ $table_color_class }} last:mb-0">
                <table>
                    <thead>
                        <tr>
                            @foreach ($item['data']['table'] as $table)
                                @if (!empty($table['heading']))
                                    <th scope="col">
                                        <span>{!! $table['heading'] !!}</span>
                                    </th>
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item['data']['table'][0]['data'] as $index => $rowData)
                            <tr>
                                @foreach ($item['data']['table'] as $table)
                                    <td data-label="{!! $table['heading'] !!}">
                                        @if ($table['column_has'] == 'text')
                                            @if (!empty($table['data'][$index]['text']))
                                                <span>
                                                    {!! $table['data'][$index]['text'] !!}
                                                </span>
                                            @endif
                                        @elseif($table['column_has'] == 'doc_link')
                                            @if (!empty($table['data'][$index]['file']))
                                                <span>
                                                    <a href="{!! $table['data'][$index]['file']['url'] !!}" target="_blank"
                                                        rel="noopener noreferrer">
                                                        @if ($content->background == 'white')
                                                            <img src="@asset('images/pdf-ext-dark.svg')"
                                                                class="block h-auto max-w-full lozad">
                                                        @elseif($content->background == 'aquamarine')
                                                            <img src="@asset('images/pdf-ext.svg')"
                                                                class="block h-auto max-w-full lozad">
                                                        @elseif($content->background == 'blue')
                                                            <img src="@asset('images/pdf-ext.svg')"
                                                                class="block h-auto max-w-full lozad">
                                                        @endif

                                                    </a>
                                                </span>
                                            @endif
                                        @elseif($table['column_has'] == 'link')
                                            @if (!empty($table['data'][$index]['link']))
                                                <span>
                                                    <a href="{!! $table['data'][$index]['link']['url'] !!}">
                                                        {!! $table['data'][$index]['link']['title'] !!}
                                                    </a>
                                                </span>
                                            @endif
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach

    </div>
</section>
