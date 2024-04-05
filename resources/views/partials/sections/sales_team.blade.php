<section class="team-wrapper ">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 py-40 m-0 lg:py-80">
            <div class="p-0 m-0 mb-40 text-center uppercase title title-Darkblue title-Redwing last:mb-0">
                <h2>
                    {{ $content->heading }}
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-0 mb-[55px] last:mb-0 p-0 w-full relative gap-10 lg:gap-x-10 lg:gap-y-[80px] items-baseline">
                @foreach($content->team_member as $team)
                <div class="flex flex-col items-center justify-center w-full p-0 m-0 card gap-7">
                    <div class="img portrait">
                        <img src="{{ $team['member_image'] }}" class="block h-auto max-w-full mx-auto lozad" width="320" height="420">
                    </div>
                    <div class="relative flex flex-col items-center justify-center w-full gap-6 p-0 m-0">
                        <div class="w-full text-center details">
                            <div class="p-0 m-0 mb-16 uppercase title title-Gray title-Redwing last:mb-0">
                                <h3>{{ $team['name'] }}</h3>
                            </div>
                            <div class="mb-30 content ">
                                <p>{{ $team['designation'] }}</p>
                            </div>
                            <div class="carddropdown">
                                @foreach($team['information'] as $info)
                                <div class="toggle-item">
                                    <div class="toggle-title">
                                        <span class="toggle-icon">
                                            <img src="@asset('images/caret-right-solid.c1b358.svg')" class="lozad">
                                        </span>
                                        <div class="p-0 m-0 uppercase title title-Darkblue title-Redwing ">
                                            <h5>
                                                {{ $info['information_heading'] }}
                                            </h5>
                                        </div>
                                    </div>
                                    <ul class="toggle-content">
                                        @foreach($info['info'] as $drop)
                                        <li>
                                            <strong>
                                                {{ $drop['title'] }}
                                            </strong>
                                            <p>
                                                {!! $drop['content'] !!}
                                            </p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <span class="divider-gary"></span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>