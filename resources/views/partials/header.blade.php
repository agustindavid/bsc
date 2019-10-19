<div class="upper-header">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-3"></div>
      <div class="col-md-5 info-header first">
       <p class="text-left">Av. Manuel Güirrior N° 818, Pueblo Libre - Lima <strong>T: +51 01.396.22.52</strong></p>
      </div>
      <div class="col-md-4 text-right info-header no-padding-right">
        <p>Horario de atención: <strong>Lunes a viernes: 8:00AM - 6:30PM</strong></p>
      </div>
    </div>
  </div>
</div>
<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        {{-- <a class="brand logo" href="{{ home_url('/') }}">BSC</a> --}}
        <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.svg')" alt=""></a>
      </div>
      <div class="col-md-7 align-self-center col-6">
        <div class="toggleMenu"><span></span><span></span><span></span></div>
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav header-main-menu', "container_class"=>"main-menu-wrap"]) !!}
          @endif
        </nav>
      </div>
      <div class="col-md-2 align-self-center no-padding-right">
        {!! wp_nav_menu(['menu' => 'menu-redes', 'menu_class' => 'nav menu-redes']) !!}
      </div>
    </div>
  </div>
</header>
