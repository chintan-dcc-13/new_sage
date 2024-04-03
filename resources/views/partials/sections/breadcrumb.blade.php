<section class="breadcrumb-wrapper bg-White relative overflow-hidden h-[320px] ">
    <div class="img absolute top-0 left-0 w-full h-full">
        <img src="{{ $content->bg_image }}" class="img-fluid lozad">
    </div>
    <div class="container-fluid">
        <div class="flex flex-col items-center justify-center w-full m-0 p-0 h-full text-center">
            <div class="title title-White title-Redwing uppercase mb-24 last:mb-0">
                <div class="mb-10 subtitle last:mb-0">
                    <h3>{{ $content->pre_heading }}</h3>
                </div>
                <h1>{{ $content-> heading }}</h1>
            </div>
        </div>
    </div>
</section>