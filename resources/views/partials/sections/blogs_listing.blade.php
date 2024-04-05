<section class="py-40 blog-wrapper lg:py-80">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 m-0 sm:justify-between mb-55 lgscreen:gap-5">
            <div class="filterbar__sorting">

            </div>
            <div class="filterbar__search">

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[55px] w-full m-0 p-0 relative" id="filter-results">
                @foreach($content->blogs as $item)
                <div class="card">
                    <div class="img landscape">
                        <a href="{!! $item['url'] !!}">
                            <img src="{!! $item['img'] !!}" class="block h-auto max-w-full lozad">
                        </a>
                    </div>
                    <div class="flex flex-col items-center justify-start w-full gap-4 p-0 text-center">
                        <div class="text-center uppercase title title-Darkblue title-Redwing">
                            <h4>{!! $item['title'] !!}</h4>
                        </div>
                        <ul class="category-list">
                            <li>
                                <img src="@asset('images/user-shape.svg')" class="block h-auto max-w-full lozad" width="15" height="15">
                                {!! $item['author'] !!}
                            </li>
                            <li>
                                <img src="@asset('images/calendar.svg')" class="block h-auto max-w-full lozad" width="15" height="15">
                                {!! $item['date'] !!}
                            </li>
                            <li>
                                <img src="@asset('images/label.svg')" class="block h-auto max-w-full lozad" width="15" height="15">
                                {!! $item['category'][0]['name'] !!}
                            </li>
                        </ul>
                        <div class="content mdscreen:text-left">
                            <p></p>
                        </div>
                        <div class="btn-custom">
                            <a href="{!! $item['url'] !!}" class="btn btn-green">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>