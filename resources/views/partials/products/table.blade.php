<section class="py-40 table-wrapper lg:py-80 ">
    <div class="container-fluid xl3:container">
        @foreach ($content->table as $item)
            <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0 mb-40 last:mb-0">
                <div class="p-0 m-0 mb-20 text-center uppercase title title-Darkblue title-Redwing last:mb-0">
                    <h2>{!! $item['data']['title'] !!}</h2>
                </div>
            </div>
            <div
                class="relative flex flex-wrap items-center justify-center w-full gap-10 p-0 m-0 mb-40 table-blue last:mb-0">
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
                                                    {!! $table['data'][$index]['file'] !!}
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
