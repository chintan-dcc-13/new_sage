<header class="header header-transperent">
  <div class="announcement">
    <div class="container-fluid">
      <div class="relative flex flex-wrap items-center lg:justify-between justify-center py-16 md:py-12 w-full">
        <div class="w-full lg:w-5/12 xl:w-6/12">
          <div class="announcement-bar swiper">
            <div class="swiper-wrapper">
              @if($message_slider)
              @foreach($message_slider as $content)
              <div class="swiper-slide">
                <p>{{ $content['message'] }}</p>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
        <div class="w-full lg:w-7/12 xl:w-6/12">
          <ul class="hidden lg:flex flex-row lg:gap-10 m-0 p-0 items-center justify-end w-full relative">
            @if (isset($email) && $email)
            <li>
              <a href="mailto:{{ $email }}" class="btn btn-link-ico">
                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.0105 8.77417C11.8415 8.89808 11.6421 8.95996 11.4428 8.95996C11.2434 8.95996 11.0441 8.89808 10.8751 8.77417L0.882876 1.44659L0.882812 15.04C0.882876 15.5702 1.31263 16 1.84281 16L21.0428 15.9999C21.573 15.9999 22.0028 15.5701 22.0028 15.04V1.44652L12.0105 8.77417Z" fill="#059BD8"></path>
                  <path d="M11.4428 6.80957L20.7283 6.39646e-05L2.15712 0L11.4428 6.80957Z" fill="#059BD8"></path>
                </svg>
              </a>
            </li>
            @endif
            @if(isset($phone_number) && $phone_number)
            <li>
              <a href="tel:{{ $phone_number }}" class="btn btn-link-ico">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.821 15.9999C12.1239 15.9999 11.1446 15.7477 9.67811 14.9284C7.89487 13.9284 6.51557 13.0052 4.74198 11.2362C3.03196 9.52728 2.19981 8.42084 1.03515 6.30153C-0.280581 3.90864 -0.0562925 2.65434 0.194425 2.11827C0.493 1.47754 0.933719 1.09432 1.50337 0.713963C1.82693 0.501973 2.16933 0.32025 2.52624 0.171099C2.56195 0.155742 2.59517 0.141099 2.62481 0.127884C2.8016 0.0482406 3.06946 -0.0721179 3.40875 0.056455C3.63518 0.141456 3.83733 0.315387 4.15376 0.627891C4.80269 1.2679 5.68949 2.69327 6.01664 3.39328C6.23628 3.86507 6.38164 4.1765 6.382 4.52579C6.382 4.93473 6.17628 5.25009 5.92664 5.59045C5.87985 5.65438 5.83342 5.71545 5.78842 5.77474C5.51663 6.13189 5.45699 6.2351 5.49627 6.41939C5.57592 6.78975 6.16985 7.89226 7.14594 8.8662C8.12202 9.84014 9.19275 10.3966 9.56454 10.4759C9.75668 10.5169 9.86204 10.4548 10.2306 10.1734C10.2835 10.133 10.3378 10.0912 10.3945 10.0494C10.7753 9.76622 11.076 9.56586 11.4753 9.56586H11.4774C11.8249 9.56586 12.1224 9.71657 12.6153 9.96515C13.2582 10.2894 14.7264 11.1648 15.3703 11.8145C15.6835 12.1302 15.8582 12.3316 15.9435 12.5577C16.0721 12.898 15.951 13.1648 15.8721 13.3434C15.8589 13.373 15.8443 13.4055 15.8289 13.4416C15.6786 13.7979 15.4958 14.1396 15.2828 14.4623C14.9032 15.0302 14.5185 15.4699 13.8764 15.7688C13.5466 15.9248 13.1858 16.0038 12.821 15.9999Z" fill="#059BD8"></path>
                </svg>
                <span>{{ $phone_number }}</span>
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid !px-0">
    <div class="header-bottom flex flex-wrap justify-between xl:items-stretch xlscreen:items-center w-full relative xl:px-80 lg:px-40 px-30 py-16 lg:pb-16 lg:pt-0">
      <div class="logo xl:flex xl:justify-center">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="{{ $header_logo }}">
        </a>
      </div>
      <div class="navbar">
        <div id="menu-main-menu" class="mobile-menu-main">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex lgscreen:flex-col flex-wrap items-center my-0 lg:gap-6 xl:gap-8 lgscreen:gap-y-6 xl:h-full lgscreen:bg-DarkBlue lgscreen:py-32 lgscreen:px-30',
          'list_item_class' => 'nav-item',]) !!}
        </div>
      </div>
      <div class="btn-custom lgscreen:hidden">
        <ul>
          <li><a href="" class="btn btn-h-green">Dealer Resources</a></li>
          <li><a href="" class="btn btn-h-green">Request A Quote</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>