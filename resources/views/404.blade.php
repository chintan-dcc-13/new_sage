@extends('layouts.app')

@section('content')
    @if (!have_posts())
        <section class="404-error-wrapper py-40 lg:py-80">
            <div class="container-fluid xl3:container">
                <div class="flex items-center flex-col justify-center m-0 p-0 w-full relative">
                    <div class="img-content mb-24">
                        <img src="{!! $page_404_image !!}" class="max-w-full h-auto block lozad">
                    </div>
                    <div class="title title-Darkblue title-Redwing uppercase m-0 p-0 mb-16 last:mb-0 text-center">
                        <h2>404 ERROR</h2>
                    </div>

                    <div class="content text-center">
                        <p>Page Not Found</p>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
