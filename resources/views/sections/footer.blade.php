<footer class="bg-Gray-100">
  <div class="container-fluid">
    <div class="footer-bottom relative py-40">
      <div class="flex flex-wrap items-center justify-center m-0 p-0 w-full relative lg:gap-6 mb-40 last:mb-0">
        <div class="lgscreen:w-full lg:flex-[1_0_auto]">
          <div class="footerlogo">
            <a href="{{ home_url('/') }}">
              <img src="{{ $footer_logo }}" height="32" width="83">
            </a>
          </div>
        </div>
        <div class="lgscreen:hidden">
          @if($social_media_item)
          <ul class="social-media m-0 flex flex-wrap items-center justify-center lg:justify-end gap-5 lg:gap-10">
            @foreach($social_media_item as $content)
            <li>
              <a href="{{ $content['social_media_link'] }}">
                <img src="{{ $content['social_media_image'] }}" class="max-w-full h-auto block lozad">
              </a>
            </li>
            @endforeach
          </ul>
          @endif
        </div>
      </div>
      <div class="flex flex-wrap items-center justify-center m-0 p-0 w-full relative lg:gap-14 xl2:gap-24"></div>
    </div>
  </div>
</footer>