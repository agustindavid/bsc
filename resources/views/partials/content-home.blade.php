@php
$heroImage=get_field('hero_image');
$suppliersImage=get_field('suppliers_img');
$mayoristImage=get_field('mayorist_img');
@endphp

<section class="hero" style="background-image:url('{{$heroImage}}')">
  <div class="overlay"></div>
  <div class="hero-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center align-self-center">
          <h5>Brake specialist corporation</h5>
          <h2>Distribuidores oficiales<br> <span class="red">CBK</span> en Perú</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="search-section">
  <div class="search-wrap container">
    <div class="search-inner">
      <h3><span>Busca el modelo de tu vehículo</span></h3>
      <?php
      echo do_shortcode('[ivory-search id="329" title="Default Search Form"]');
      ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 company-feature">
        <div class="row">
          <div class="col-md-3">
            <p><img src="@asset('images/star_icon.png')"></p>
          </div>
          <div class="col-md-9">
            <p>Calidad en nuestros productos y servicios</p></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 company-feature">
        <div class="row">
          <div class="col-md-3 align-self-center">
            <p><img src="@asset('images/hands.svg')"></p>
          </div>
          <div class="col-md-9 align-self-center">
            <p>Comprometidos con la excelencia</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 company-feature">
        <div class="row">
          <div class="col-md-3 align-self-center">
            <p><img src="@asset('images/disc_icon.png')"></p>
          </div>
          <div class="col-md-9 align-self-center">
            <p>Alta tecnología en sistemas de frenos</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 company-feature">
        <div class="row">
          <div class="col-md-3 align-self-center">
            <p><img src="@asset('images/network_icon.png')"></p>
          </div>
          <div class="col-md-9 align-self-center">
            <p>Trabajamos para garantizar su seguridad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blocks">
    @php
    $product_cats = get_terms( 'products_cat', array(
        'hide_empty' => false, 'parent'=>0
    ) );
    @endphp
  <div class="container-fluid">
    <div class="row">
      @foreach($product_cats as $product_cat)
      @php
        $pod = pods('products_cat');
        $pod->fetch($product_cat->term_id);
        $cat_img=$pod->get_field('category_image');
        $cat_icon=$pod->get_field('cat_icon');
        $cat_icon_url=pods_image_url($cat_icon[0]['ID'], 'full');
        $cat_img_url=pods_image_url($cat_img[0]['ID'], 'full');
      @endphp
      <div class="col-md-4 block-item no-padding">
          <div class="block-item-img" style="background-image:url('{{$cat_img_url}}')"></div>
        <div class="block-content">
          <p><img class="cat-icon" src="{{$cat_icon_url}}" alt=""></p>
          <h3>{{$product_cat->name}}</h3>
          <a href="{{get_term_link($product_cat->term_id)}}">Ver más</a>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>
<section class="suppliers-banner">
  <div class="container">
    <div class="suppliers-banner-wrap row no-margin">
      <div class="col-md-5 no-padding white-supplier">
        <div class="white-inner">
          <h3>Agentes</h3>
          <p>Tiendas afiliadas a BSC que comercializan productos originales CBK en Perú</p>
          <a href="#">Ver Todos</a>
        </div>
      </div>
      <div class="col-md-7 suppliers-img no-padding" style="background-image:url('{{$suppliersImage}}')"></div>
    </div>
  </div>
</section>
<section class="featured-products">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2><div class="stripes">|||||||</div>Productos Destacados</h2>
      </div>
      <div class="col-md-8">
        <hr>
      </div>
    </div>
    <div class="row featured-products-slider">
        <?php
        $featured=new WP_Query(array('post_type'=>'producto'));
        if ( $featured->have_posts() ) {
          while ( $featured->have_posts() ) {
            $featured->the_post();
            $terms = wp_get_post_terms( get_the_ID(), 'products_cat');
            $marcas = wp_get_post_terms( get_the_ID(), 'marca');
            $parents=[];

            foreach($marcas as $marca) {
              if($marca->parent==0){
                $parents[]=$marca;
              }
            }
            $rating=get_field('rating');
            $percent_rating=($rating*100)/5;
            for($i=0; $i<6; $i++){
       ?>
      <div class="col-md-3 featured-product-wrap">
        <div class="card">
          <div class="card-img-wrap">
            <?php the_post_thumbnail('full', array("class"=>"card-img-top img-fluid")) ?>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title"><?php the_title() ?></h5>
            <p class="card-text">
                <?php
                foreach ($parents as $parent) {
                  $models=get_terms(array("taxonomy"=>'marca', "parent"=>$parent->term_id));
                  foreach ($models as $model) {
                    echo $parent->name . ' ' . $model->name . '<br>';
                  }
                }
                ?>
              </p>
            </p>
              <div class="no-yellow">
                <i class="fas fa-star gray-star"></i>
                <i class="fas fa-star gray-star"></i>
                <i class="fas fa-star gray-star"></i>
                <i class="fas fa-star gray-star"></i>
                <i class="fas fa-star gray-star"></i>
              <div class="yes-yellow" style="width:{{$percent_rating}}%">
                  <i class="fas fa-star yellow-star"></i>
                  <i class="fas fa-star yellow-star"></i>
                  <i class="fas fa-star yellow-star"></i>
                  <i class="fas fa-star yellow-star"></i>
                  <i class="fas fa-star yellow-star"></i>
                </div>
              </div>
          </div>
        </div>
      </div>
    @php
            }
    }
  }
  wp_reset_postdata();
  @endphp
    </div>
  </div>
</section>
<section class="home-banners">
  <div class="container">
    <div class="row no-margin">
      <div class="col-md-6 no-padding-left ">
        <div class="block-item">
          <div class="block-item-img" style="background-image:url('{{$cat_img_url}}')"></div>
          <h3>Destacados</h3>
        </div>
      </div>
      <div class="col-md-6 no-padding-right">
        <div class="block-item">
            <div class="block-item-img" style="background-image:url('{{$cat_img_url}}')"></div>
          <h3>Faq</h3>
          </div>
      </div>
    </div>
  </div>
</section>
<section class="suppliers-banner">
    <div class="container">
      <div class="suppliers-banner-wrap row no-margin">
        <div class="col-md-6 no-padding">
          <div class="white-inner">
            <h3>Pedidos al<br>mayor</h3>
            <p>Escríbenos para enviarte una cotización personalizada</p>
            <a href="#">Contáctanos</a>
          </div>
        </div>
        <div class="col-md-5  no-padding">
          <img class="mayorist-img" src="{{$mayoristImage}}" alt="">
        </div>
        <div class="col-md-1">
          <div class="black-clip">
            <a href="">+</a>
          </div>
        </div>
      </div>
    </div>
  </section>
