<hedaer class="header header-transperent">
<div class="container-fluid !px-0">
  <div class="header-bottom flex flex-wrap justify-between xl:items-stretch xlscreen:items-center w-full relative xl:px-80 lg:px-40 px-30 py-16 lg:pb-16 lg:pt-0">
  <div class="logo xl:flex xl:justify-center">
  <a class="brand" href="{{ home_url('/') }}">                
    <img src="{{ $header_logo }}">
  </a>
  </div>
  <div class="navbar">
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
  </div>
  <div class="btn-custom lgscreen:hidden">
  <ul>
    <li><a href="" class="btn btn-h-green">Dealer Resources</a></li>
    <li><a href="" class="btn btn-h-green">Request A Quote</a></li>
  </ul>
  </div>
  </div>
</div>
</hedaer>