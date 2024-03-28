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
      <div class="flex flex-wrap items-center justify-center m-0 p-0 w-full relative lg:gap-14 xl2:gap-24">
        <div class="w-full lg:flex-1">
          <div class="subscribe">
            <div class="title title-Darkblue title-Redwing uppercase m-0 mb-8 last:mb-0 p-0">
              <h3>{{ $news_letter_title }}</h3>
            </div>
            <div class="content mb-16 last:mb-0">
              <p>{{ $news_letter_description }}</p>
            </div>
            {!! do_shortcode($form_shortcode) !!}
            <div class="lgscreen:w-full lg:hidden my-40">
            @if($social_media_item)
              <ul class="social-media m-0 flex flex-wrap items-center justify-center lg:justify-end gap-[62px] lg:gap-10">
              @foreach($social_media_item as $content)
                <li>
                  <a href="{{ $content['social_media_link'] }}" target="_blank" rel="noopener noreferrer">
                    <img src="{{ $content['social_media_image'] }}" width="32" height="32" class="max-w-full h-auto block lozad" alt="facebook" data-loaded="true">
                  </a>
                </li>
                @endforeach
              </ul>
              @endif
            </div>
          </div>
        </div>
        <div class="w-full lg:flex-[0_0_40%]">
          <div class="flex flex-col w-full m-0 p-0 relative lg:items-start justify-center gap-10 lg:gap-8">
            <div class="footer-menu">
              {!! wp_nav_menu(['theme_location' => 'footer_navigation']) !!}
            </div>
            <div class="footer-info">
              <ul>
                <li>
                  <img src="http://localhost/sage_theme/wp-content/uploads/2024/03/telephone.37b30a.svg" height="16" class="max-w-full h-auto block lozad" alt="telephone">
                  <a href="tel:{{ $phone_number }}">
                    {{ $phone_number }}
                  </a>
                </li>
                <li>
                  <img src="http://localhost/sage_theme/wp-content/uploads/2024/03/mail.e0ddec.svg" height="16" class="max-w-full h-auto block lozad" alt="mail">
                  <a href="mailto:{{ $email }}">
                    {{ $email }}
                  </a>
                </li>
              </ul>
            </div>
            <div class="w-full copyrights relative z-1">
              <div class="flex lgscreen:flex-col lg:flex-wrap w-full justify-center lg:justify-end items-center">
                <div class="copttxt content !w-auto flex-[0_0_auto]">
                  <p>
                    {{ $copy_right }}
                  </p>
                </div>
                <div class="divider"></div>
                <a href="https://techyscouts.com/" class="techyscouts-credit-link flex-[1_0_auto]" target="_blank" rel="noopener noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="-100 0 3700 552" id="techyscouts-logo" aria-labelledby="techyscouts-logo-title" role="img">
                    <title id="techyscouts-logo-title">Made with love by TechyScouts</title>
                    <path id="techyscouts-logo-heart" fill="#455A64" style="transform-origin:10% 50%;" d="M436 257L255 427 73 257a81 81 0 0 1-25-62c0-23 4-42 22-59 17-15 38-23 62-23 23 0 45 14 61 29l62 54 62-54c16-15 38-29 61-29 24 0 45 8 61 23 19 17 23 36 23 59 0 24-7 46-26 62m32-154c-50-46-130-46-179 0l-34 30-34-30c-49-46-130-46-179 0-56 51-56 134 0 185l213 196 213-196c56-51 56-134 0-185"></path>
                    <path id="techyscouts-logo-line-1" fill="#455A64" d="M803 372L1016 0l34 20-213 372-34-20z"></path>
                    <path id="techyscouts-logo-line-2" fill="#455A64" d="M879 552l-33-20 213-372 33 20-213 372z"></path>
                    <path id="techyscouts-logo-text" d="M3491.171 318.855c11.336 52.417-38.612 83.584-85.725 83.584-36.132 0-80.058-20.542-84.308-60.563l-.355-2.48 5.668-.708.354 2.48c3.897 37.188 45.343 55.959 78.995 55.959 43.217 0 89.976-27.98 79.704-77.21-15.941-73.667-155.865-6.375-162.241-98.814-1.417-14.875 2.48-29.396 11.69-41.438 36.132-46.75 138.152-40.73 150.196 23.376l.355 2.833-5.314 1.062-.354-2.833c-2.126-10.27-6.376-19.125-13.461-26.917-15.232-16.292-39.675-23.021-61.992-22.667-23.38.354-49.947 8.854-64.825 28.334-8.856 10.98-12.044 24.083-10.981 37.896 6.376 86.772 145.591 18.771 162.594 98.106zm-254.34 82.168h-5.314V157.707h-85.725v-5.667h176.764v5.667h-85.725v243.316zm-198.366 1.77c-41.092 0-86.788-24.083-86.788-70.125V152.394h5.667v180.628c0 42.855 43.217 64.105 81.12 64.105 37.904 0 81.121-21.25 81.121-64.46V152.395h5.668v180.628c0 45.688-46.05 69.772-86.788 69.772zm-239.105.709c-34.715 0-66.596-14.167-89.267-37.542-22.672-23.021-37.195-54.897-37.195-89.96 0-35.063 14.523-66.938 37.195-89.96 22.67-23.375 54.552-37.542 89.267-37.542 35.07 0 66.597 14.167 89.622 37.542 22.671 23.022 37.195 54.897 37.195 89.96 0 35.063-14.524 66.939-37.195 89.96-23.025 23.375-54.552 37.542-89.622 37.542zm85.726-213.212c-21.963-22.312-52.427-36.125-85.726-36.125-33.298 0-63.408 13.813-85.37 36.125-21.61 21.959-35.425 52.064-35.425 85.71 0 33.646 13.816 63.75 35.424 85.71 21.963 22.312 52.073 36.125 85.371 36.125 33.299 0 63.763-13.813 85.726-36.125 21.608-21.96 35.07-52.064 35.07-85.71 0-33.646-13.462-63.751-35.07-85.71zM2544.67 394.648c31.882 0 60.93-13.459 81.83-35.063 9.564-9.917 17.711-21.25 23.379-34.355h6.022c-6.022 14.52-14.878 27.625-25.505 38.605-21.963 22.667-52.073 36.48-85.726 36.48-33.652 0-63.762-13.813-85.725-36.48-21.608-22.313-35.424-53.126-35.424-87.48 0-34.001 13.816-64.814 35.424-87.127 21.963-22.667 52.073-36.48 85.725-36.48 33.653 0 63.763 13.813 85.726 36.48 10.627 10.98 19.483 24.084 25.505 38.605h-6.022c-5.668-13.105-13.815-24.792-23.38-34.71-20.9-21.604-49.947-34.708-81.829-34.708-31.88 0-60.928 13.104-81.828 34.709-20.9 21.604-34.007 51-34.007 83.23 0 32.584 13.107 61.98 34.007 83.23 20.9 21.605 49.947 35.064 81.828 35.064zm-228.124 7.791c-36.132 0-80.058-20.542-84.309-60.563l-.354-2.48 5.668-.708.354 2.48c3.897 37.188 45.343 55.959 78.995 55.959 43.217 0 89.977-27.98 79.704-77.21-15.941-73.667-155.865-6.375-162.24-98.814-1.418-14.875 2.479-29.396 11.689-41.438 36.132-46.75 138.152-40.73 150.196 23.376l.355 2.833-5.314 1.062-.354-2.833c-2.126-10.27-6.376-19.125-13.461-26.917-15.232-16.292-39.675-23.021-61.992-22.667-23.38.354-49.947 8.854-64.825 28.334-8.856 10.98-12.044 24.083-10.981 37.896 6.376 86.772 145.591 18.771 162.594 98.106 11.336 52.417-38.611 83.584-85.725 83.584zm-182.426-2.479h-5.668V297.605l-91.039-145.211h6.73l87.143 139.544 87.143-139.544h6.73l-91.039 145.21V399.96zm-120.08-122.897h-155.51V399.96h-5.313V152.394h5.314V271.75h155.51V152.394h5.668V399.96h-5.668V277.063zm-298.26 117.585c31.881 0 60.929-13.459 81.829-35.063 9.564-9.917 17.711-21.25 23.38-34.355h6.021c-6.022 14.52-14.878 27.625-25.505 38.605-21.962 22.667-52.073 36.48-85.725 36.48-33.653 0-63.763-13.813-85.726-36.48-21.608-22.313-35.423-53.126-35.423-87.48 0-34.001 13.815-64.814 35.423-87.127 21.963-22.667 52.073-36.48 85.726-36.48 33.652 0 63.763 13.813 85.725 36.48 10.627 10.98 19.483 24.084 25.505 38.605h-6.022c-5.668-13.105-13.815-24.792-23.38-34.71-20.9-21.604-49.947-34.708-81.828-34.708-31.882 0-60.929 13.104-81.829 34.709-20.9 21.604-34.007 51-34.007 83.23 0 32.584 13.107 61.98 34.007 83.23 20.9 21.605 49.947 35.064 81.829 35.064zm-277.365 5.312V152.394h136.736v5.313h-131.068v115.46h128.234v5.666h-128.234v115.815h131.776v5.312h-137.444zm-106.975 1.063h-5.314V157.707h-85.725v-5.667h176.764v5.667h-85.725v243.316z" style="fill:none;stroke:#455A64;stroke-width:16;"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>