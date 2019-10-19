<footer class="content-info">
  <div class="container">
    <div class="row row-eq-height">
      <div class="col-md-3">
        <div class="about-footer">
          <h4>Brake Specialist Corporation</h4>
          <p>BSC es una empresa peruana fundada en el 2014 que se dedica a la importación y comercialización de diversos productos de las más prestigiosas marcas europeas productoras de sistemas de frenos: somos distribuidores exclusivos de CBK y nos sentimos orgullosos de poder brindar un exhaustivo servicio de venta a nivel nacional. Ofrecemos alta calidad, eficiencia, rapidez y excelentes precios, en función de satisfacer todas las necesidades del mercado.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
            <div class="about-footer">
              <h4>Nosotros</h4>
              <ul class="footer-list">
                <li><a>Misión</a></li>
                <li><a>Visión</a></li>
             </ul>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="about-footer">
              <h4>Productos</h4>
              <ul class="footer-list">
                @php
                 $product_cats = get_terms( 'products_cat', array(
                'hide_empty' => false, 'parent'=>0
                ) );
                @endphp
                @foreach ($product_cats as $products_cat)
                  <li><a href="{{get_term_link($products_cat->term_id)}}">{{$products_cat->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="about-footer">
              <h4>Información</h4>
              <p>
                <a target="_blank" href="https://goo.gl/maps/FfGt9JQ6Hk7sM58b6">Av. Manuel Güirrior N° 818, Pueblo Libre - Lima</a>
                <a href="#">FAQ</a>
              </p>
            </div>
          </div>
        </div>
        <div class="row no-margin rounded-row">
          <div class="col-md-5 cbk-logo-wrap align-self-center">
            <div class="cbk-logo">bsc</div>
          </div>
          <div class="col-md-7"><p>Dedicados a la importación y comercialización de sistemas de frenos originales CBK</p></div>
        </div>
      </div>
      <div class="col-md-3">

      </div>
    </div>
  </div>
</footer>
