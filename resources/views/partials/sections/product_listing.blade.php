<section class="collection-wrapper  ">
    <div class="container-fluid xl3:container">
        <div class="relative flex flex-wrap items-center justify-center w-full p-0 py-40 m-0 lg:py-80">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-0 mb-[55px] last:mb-0 p-0 w-full relative gap-10 lg:gap-x-10 lg:gap-y-[80px] product-items-box">
                @php $product_post = count($content->products);@endphp
                @foreach ($content -> products as $product)
                    <div class="flex flex-col items-center justify-start w-full p-0 m-0 card gap-7 product_item">
                        <a href="{!! $product['url'] !!}" class="img portrait">
                        {!! $product['image_id'] !!}
                            <img src="{!! $product['image'] !!}" class="img-fluid lozad">
                        </a>
                        <div class="relative flex flex-col items-center justify-start w-full gap-6 p-0 m-0">
                            <div class="w-full text-center details">
                                <div class="p-0 m-0 uppercase title title-Darkblue title-Redwing">
                                    <h3>{!! $product['title'] !!}</h3>
                                </div>
                                <span class="divider-green"></span>
                                <div class="p-0 m-0 mb-16 uppercase title title-Gray title-Redwing last:mb-0">
                                    <h5>{!! $product['collection_name'] !!}</h5>
                                </div>
                                <div class="content">
                                    <p>{!! $product['brand_name'] !!}</p>
                                </div>
                            </div>
                                <div class="btn-custom">
                                    <a href="{!! $product['url'] !!}" class="btn btn-green">
                                    Learn More
                                    </a>
                                </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if ($product_post > 9)
                    <div class="product-loadmore">
                        <div
                            class="btn-custom flex flex-wrap items-center justify-center w-full p-0 pt-20 pb-40 m-0 border-0 border-solid border-t-1 border-Blue-100 lg:pb-80">
                            <a href="javascript:void(0);" class="btn btn-green">
                                Load More
                            </a>
                        </div>
                    </div>
                @endif
    </div>
</section>
