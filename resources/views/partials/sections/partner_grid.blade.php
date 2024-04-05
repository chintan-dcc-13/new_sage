<section class="py-40 partners-wrapper lg:py-80 ">
    <div class="container-fluid xl3:container">
        <div class="flex flex-wrap items-center justify-center m-0 p-0 lg:mb-[31px] mb-40 w-full relative">
            <div class="p-0 m-0 mb-16 text-center uppercase title title-Darkblue title-Redwing last:mb-0">
                <h2>
                    {{ $content->heading }}
                </h2>
            </div>
            <div class="content text-center max-w-[1152px]">
                <p>
                    {!! $content->description !!}
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid xl3:container">
        <div class="partners-slider swiper lg:p-[10px] lg:pb-0">
            <div class="swiper-wrapper">
                @foreach($content->partner_grid as $item)
                <div class="swiper-slide">
                    <div class="flex flex-col items-center justify-center gap-7">
                        <div class="h-full card p-14">
                            <div class="img portrait bg-White bg-opacity-10 ">
                                <img src="{{ $item['image'] }}" class="block h-auto max-w-full mx-auto lozad" width="280" height="280">
                            </div>
                        </div>
                        <div class="text-center card-content">
                            <div class="mb-16 uppercase title title-Gray title-Redwing last:mb-0">
                                <h3>
                                    {{ $item['heading'] }}
                                </h3>
                            </div>
                            <div class="content">
                                <p>
                                    {!! $item['description'] !!}
                                </p>
                            </div>
                        </div>
                        <div class="contect-details">
                            <ul>
                                @if($item['email']['url'])
                                <li>
                                    <a href="{{ $item['email']['url'] }}" class="btn-link-ico btn-link-blue" target="_self">
                                        <img src="@asset('images/email.5d4cc1.svg')" class="lozad" height="15" width="15">
                                        {{ $item['email']['title'] }}
                                    </a>
                                </li>
                                @endif
                                @if($item['phone_number']['url'])
                                <li>
                                    <a href="{{ $item['phone_number']['url'] }}" class="btn-link-ico btn-link-blue" target="_self">
                                        <img src="@asset('images/call-answer.cfc115.svg')" class="lozad" height="15" width="15">
                                        {{ $item['phone_number']['title'] }}
                                    </a>
                                </li>
                                @endif
                                @if($item['website_link']['url'])
                                <li>
                                    <a href="{{ $item['website_link']['url'] }}" class="btn-link-ico btn-link-blue" target="_blank">
                                        <img src="@asset('images/website.dc48cc.svg')" class="lozad" height="15" width="15">
                                        {{ $item['website_link']['title'] }}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="partner-pagination  swiper-pagination"></div>
        </div>
    </div>
</section>