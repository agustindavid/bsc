<div class="upper-header">
  <div class="container">
    <div class="row justify-content-end">
      <p class="text-right info-header">Av. Manuel Güirrior N° 818, Pueblo Libre - Lima <strong>T: +51 01.396.22.52</strong> <span>|</span> Horario de atención: <strong>Lunes a viernes: 8:00AM - 6:30PM</strong></p>
    </div>
  </div>
</div>
<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a class="brand logo" href="{{ home_url('/') }}">BSC</a>
      </div>
      <div class="col-md-9 align-self-center">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav header-main-menu']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</header>
