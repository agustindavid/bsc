<div class="header-producto" style="background-image: url('@asset('images/product-banner.jpg'));"></div>
<div class="product-section-search">
  <div class="container">
    <div class="row no-margin">
      <div class="col-md-3 product-title no-padding-left">
        <h2>Productos</h2>
      </div>
      <div class="col-md-9">
        <div class="search-wrap">
          <div class="search-inner">
            <h3><span>Busca el modelo de tu vehículo</span></h3>
            <?php
              echo do_shortcode('[ivory-search id="329" title="Default Search Form"]');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row product-content">
      <div class="col-md-3 cats-sidebar">
  <?php
  $parentCats=get_terms( array(
      'taxonomy' => 'products_cat',
      'hide_empty' => false,
      'parent' => 0
  ));


  ?>

  @foreach ($parentCats as $cat)
      <div class="parent-cat"><h4>{{$cat->name}}</h4><span href="#" class="toggleCatList">+</span></div>
      @php $childrenCats=App\getTaxChildren($cat->term_id) @endphp
      <div class="inner-sidebar">
        <ul>
          <li><a href="<?php echo get_term_link($cat->term_id) ?>">Ver todas</a></li>
        @foreach ($childrenCats as $childrenCat)
          <li><a href="<?php echo get_term_link($childrenCat->term_id) ?>">{{$childrenCat->name}}</a></li>
        @endforeach
        </ul>
      </div>
  @endforeach
<div class="marcas-sidebar">
  <h5 class="marcas-title">Marcas</h5>
  <?php
  $marcas=get_terms( array(
    'taxonomy' => 'marca',
    'hide_empty' => false,
    'parent' => 0
));
?>

@foreach ($marcas as $marca)

    <a class="tagPill" href="{{get_term_link($marca->term_id) }}">{{$marca->name}}</a>
@endforeach
</div>

      </div>
      <div class="col-md-9">

      <div class="row no-margin">
      <div class="products-bc col-md-12">
        <a href="#">Home</a><a>Productos</a><a>Pastillas de freno</a>
      </div>
      <div class="filters-menu col-md-12">
        <div class="row">
          <div class="col-md-2">
            <span>1311 Items</span>
          </div>
          <div class="col-md-10 text-right">
            <span>Ordenar por
            <select name="" id="">
              <option value="">Nombre</option>
              <option value=""></option>
            </select></span>
            <a href="" class="grid-view square"><i class="fas fa-th"></i></a>
            <a href="" class="list-view square"><i class="fas fa-bars"></i></a>
          </div>
        </div>
      </div>
      </div>
